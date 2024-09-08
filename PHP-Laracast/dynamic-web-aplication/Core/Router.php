<?php

    namespace Core;

    use Core\Middleware\Middleware;
    use JetBrains\PhpStorm\NoReturn;

    class Router
    {

        protected array $routes = [];

        public function add($method, $uri, $controller) // Creamos las rutas
        {
            $this->routes[] = ['method' => $method, 'uri' => $uri, 'controller' => $controller, 'middleware' => null];

            return $this;
        }

        public function get($uri, $controller)
        {
            return $this->add('GET', $uri, $controller);
        }

        public function post($uri, $controller)
        {
            return $this->add('POST', $uri, $controller);
        }

        public function delete($uri, $controller)
        {
            return $this->add('DELETE', $uri, $controller);
        }

        public function patch($uri, $controller)
        {
            return $this->add('PATCH', $uri, $controller);
        }

        public function put($uri, $controller)
        {
            return $this->add('PUT', $uri, $controller);
        }

        public function only($key)
        {
            $this->routes[array_key_last($this->routes)]['middleware'] = $key;

            return $this;
        }

        public function route($uri, $method) // Validamos que la ruta que queremos ingresar está creada.
        {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                    Middleware::resolve($route['middleware']);

                    return require(base_path("controllers/".$route['controller']));
                };
            }
            $this->abort(404);
        }

        #[NoReturn]
        public function abort($code): void
        {
            http_response_code($code);
            require(base_path('views/'.$code.'.php'));
            die();
        }

    }