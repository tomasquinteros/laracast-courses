<?php

    $heading = 'Note';
    $config = require 'config.php';
    $db = new Database($config['database'], 'root', 'tomas');

    $note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => intval($_GET['id'])])->findOrFail();
    authorized($note['user_id' !== 1]);
    require 'views/note.view.php';