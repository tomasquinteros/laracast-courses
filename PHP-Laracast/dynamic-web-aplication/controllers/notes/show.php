<?php

    use Core\App;
    use Core\Database;

    $heading = 'Note';

    $db = App::resolve(Database::class);
    $note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => intval($_GET['id'])])->findOrFail();
    authorized($note['user_id' !== 1]);
    view('notes/show.view.php', ['heading' => $heading, 'note' => $note]);