<?php

    $heading = 'My notes';
    $config = require 'config.php';
    $db = new Database($config['database'], 'root', 'tomas');

    $notes = $db->query('SELECT * FROM notes where user_id = 1')->get();
    require 'views/notes.view.php';