<?php

    use Core\App;
    use Core\Database;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = App::resolve(Database::class);

    $user = $db->query('SELECT * FROM users WHERE email = :email', [':email' => $email])->find();

    if ($user) {
        if (password_verify($password, $user['password'])) {
            login($user);
        }
    }

    view('session/create.view.php', ['errors' => ['error' => 'The email and password are incorrect.']]);