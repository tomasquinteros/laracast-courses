<?php

    $routes = [
      '/' => 'controllers/index.php',
      '/contact' => 'controllers/contact.php',
      '/about' => 'controllers/about.php',
    ];
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    function routeToController($routes, $url): void
    {
        if (array_key_exists($url, $routes)) {
            require $routes[$url];
        } else {
            abort();
        }
    }

    function abort($code = 404): void
    {
        http_response_code($code);
        require "views/$code.php";
        die();
    }

    routeToController($routes, $url);