<?php
    function dd($value) : void {
        echo '<pre>' . var_dump($value) . '</pre>';
    }

    function urlIs($value) {
        return $_SERVER['REQUEST_URI'] === $value;
    }