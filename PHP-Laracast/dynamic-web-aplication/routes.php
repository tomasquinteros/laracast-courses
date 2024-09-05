<?php

    $router->get('/', 'index.php');
    $router->get('/contact', 'contact.php');
    $router->get('/about', 'about.php');

    $router->get('/notes', 'notes/index.php');
    $router->get('/note', 'notes/show.php');
    $router->get('/notes/create', 'notes/create.php');
    $router->get('/note/edit', 'notes/edit.php');
    $router->patch('/notes', 'notes/update.php');
    $router->post('/notes', 'notes/store.php');
    $router->delete('/notes', 'notes/destroy.php');