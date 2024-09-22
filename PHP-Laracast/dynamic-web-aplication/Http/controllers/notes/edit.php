<?php

    use Core\App;
    use Core\Database;

    $heading = 'Edit note';
    $db = App::resolve(Database::class);
    $current_id = 1;

    $note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $_GET['id']])->findOrFail();
    authorized($note['user_id'] !== $current_id);

    view('notes/edit.view.php', ['note' => $note]);