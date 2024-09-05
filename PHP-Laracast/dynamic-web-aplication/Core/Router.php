<?php

    namespace Core;

    use JetBrains\PhpStorm\NoReturn;

    class Router
    {

        protected array $routes = [];

        public function add($method, $uri, $controller): void // Creamos las rutas
        {
            $this->routes[] = ['method' => $method, 'uri' => $uri, 'controller' => $controller];
        }

        public function get($uri, $controller): void
        {
            $this->add('GET', $uri, $controller);
        }

        public function post($uri, $controller): void
        {
            $this->add('POST', $uri, $controller);
        }

        public function delete($uri, $controller): void
        {
            $this->add('DELETE', $uri, $controller);
        }

        public function patch($uri, $controller): void
        {
            $this->add('PATCH', $uri, $controller);
        }

        public function put($uri, $controller): void
        {
            $this->add('PUT', $uri, $controller);
        }

        public function route($uri, $method) // Validamos que la ruta que queremos ingresar está creada.
        {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                    return require(base_path("controllers/".$route['controller']));
                };
            }
            $this->abort(404);
        }

        #[NoReturn] public function abort($code): void
        {
            http_response_code($code);
            require(base_path('views/'.$code.'.php'));
            die();
        }

    }