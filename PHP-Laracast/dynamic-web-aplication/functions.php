<?php

    use JetBrains\PhpStorm\NoReturn;

    #[NoReturn] function dd($value): void
    {
        echo '<pre>'.var_dump($value).'</pre>';
        die();
    }

    function urlIs($value): bool
    {
        return $_SERVER['REQUEST_URI'] === $value;
    }

    function authorized($conditional, $status = Response::FORBIDDEN): void
    {
        if ($conditional) {
            abort($status);
        }
    }