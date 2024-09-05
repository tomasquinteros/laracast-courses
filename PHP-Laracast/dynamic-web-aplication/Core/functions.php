<?php

    use JetBrains\PhpStorm\NoReturn;
    use Core\Response;

    #[NoReturn] function dd($value): void
    {
        echo '<pre>'.var_dump($value).'</pre>';
        die();
    }

    function urlIs($value): bool
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    #[NoReturn] function abort($code = 404): void
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }

    function authorized($conditional, $status = Response::FORBIDDEN): void
    {
        if ($conditional) {
            abort($status);
        }
    }

    function base_path($path): string
        /*BASE_PATH*
         *Esta función lo que hace es usar la variable BASE_PATH que es la ruta principal del proyecto(dynamic-web-aplication/) y el
         * atributo
         * que le pasamos nos referimos al archivo, si el archivo está dentro de otra carpeta debemos especificar que carpeta es por
         * ejemplo = Core/Response.php*/
    {
        return BASE_PATH.$path;
    }

    function view($path, $attributes = []): void
    {
        extract($attributes);
        require base_path("views/{$path}");
    }