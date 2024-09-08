<?php

    $router->get('/', 'index.php');
    $router->get('/contact', 'contact.php');
    $router->get('/about', 'about.php');

    // Notes
    $router->get('/notes', 'notes/index.php')->only('auth');
    $router->get('/note', 'notes/show.php');
    $router->get('/notes/create', 'notes/create.php');
    $router->get('/note/edit', 'notes/edit.php');
    $router->patch('/notes', 'notes/update.php');
    $router->post('/notes', 'notes/store.php');
    $router->delete('/notes', 'notes/destroy.php');

    // Register
    $router->get('/register', 'registration/create.php')->only('guest');
    $router->post('/register', 'registration/store.php');

    // Login and Logout
    $router->get('/login', 'session/create.php')->only('guest');
    $router->post('/session', 'session/store.php');
    $router->delete('/session', 'session/destroy.php')->only('auth');