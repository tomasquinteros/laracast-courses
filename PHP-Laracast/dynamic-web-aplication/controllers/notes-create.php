<?php

    require 'Validator.php';
    $config = require 'config.php';
    $db = new Database($config['database'], 'root', 'tomas');
    $heading = 'Create note';
    if ($_SERVER["REQUEST_METHOD"] === 'POST') {
        $errors = [];
        if ( ! Validator::string($_POST['body'], 1, 500)) {
            $errors['body'] = 'A body cannot be empty and cannot longer than 500';
        }
        if (empty($errors)) {
            $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
                ':body' => $_POST['body'],
                ':user_id' => 1,
              ]
            );
        }
    }
    require 'views/notes-create.view.php';