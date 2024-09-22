<?php

    use Core\App;
    use Core\Database;

    $db = App::resolve(Database::class);
    $current_id = 1;

    $note = $db->query('SELECT * FROM NOTES WHERE id = :id', [':id' => $_POST['id']])->findOrFail();

    authorized($note['user_id'] !== 1, 403);

    $db->query('DELETE FROM notes WHERE id = :id', [':id' => $_POST['id']]);
    header('location: /notes');
    exit();