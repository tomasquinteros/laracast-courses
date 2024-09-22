<?php

    use Core\App;
    use Core\Database;
    use Core\Validator;

    $db = App::resolve(Database::class);
    $heading = 'Note';

    $current_id = 1;
    $note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $_POST['id']])->findOrFail();
    authorized($note['user_id' !== $current_id]);

    $errors = [];
    if ( ! Validator::string($_POST['body'], 1, 10)) {
        $errors['body'] = 'A body cannot be empty and cannot longer than 10';

        view('notes/edit.view.php', ['heading' => $heading, 'errors' => $errors, 'note' => $note]);
    }

    if (empty($errors)) {
        $db->query('UPDATE notes SET body = :body WHERE id = :id', [
            ':body' => $_POST['body'],
            ':id' => $note['id'],
          ]
        );

        header('location: /note?id='.$note['id']);
    }