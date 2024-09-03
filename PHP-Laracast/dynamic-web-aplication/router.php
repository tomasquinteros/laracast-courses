<?php

    use JetBrains\PhpStorm\NoReturn;

    // RUTAS DE MI APLICACIÓN
    $routes = require 'routes.php';
    //PASEAMOS LA URL QUE RECUPERAMOS MEDIANTE LA VARIABLE GLOBAL $_SERVER PARA QUE NOS QUEDE SEPARADO EL PATH DE LA QUERY
    function routeToController($routes, $url): void
        // Vemos si la url a la que queremos ingresar existe en nuestras rutas creadas, si es true, no lleva, y si no, erro 404
    {
        if (array_key_exists($url, $routes)) {
            require $routes[$url];
        } else {
            abort();
        }
    }

    #[NoReturn] function abort($code = 404): void
    {
        http_response_code($code);
        require "views/{$code}.php";
        die();
    }

    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    routeToController($routes, $url);