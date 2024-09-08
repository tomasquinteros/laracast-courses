<?php

    namespace Core\Middleware;

    class Guest {
        public function handle () {
            if ($_SESSION ?? false) {
                header('location: /register');
            }
        }
    }