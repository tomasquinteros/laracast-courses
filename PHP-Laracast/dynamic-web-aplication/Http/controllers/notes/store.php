<?php

    use Core\App;
    use Core\Database;
    use Core\Validator;

    $db = App::resolve(Database::class);
    $heading = 'Create note';
    $errors = [];

    if ( ! Validator::string($_POST['body'], 1, 500)) {
        $errors['body'] = 'A body cannot be empty and cannot longer than 500';

        view('notes/create.view.php', ['heading' => $heading, 'errors' => [$errors]]);
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [
            ':body' => $_POST['body'],
            ':user_id' => 1,
          ]
        );

        header('location: /notes');
    }