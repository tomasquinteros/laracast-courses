<?php

    use Core\App;
    use Core\Database;

    $heading = 'My notes';
    $db = App::resolve(Database::class);
    $currentUser = ['id' => 1];

    $notes = $db->query('SELECT * FROM notes where user_id = 1')->get();
    view('notes/index.view.php', ['heading' => $heading, 'notes' => $notes]);