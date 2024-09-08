<?php

    use Core\App;
    use Core\Database;
    use Core\Validator;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = [];
    if ( ! Validator::email($email)) {
        $errors['email'] = 'Email is required, please enter your email';
    }
    if ( ! Validator::string($password, 7, 255)) {
        $errors['password'] = 'The password must be more than 7 characters';
    }

    if ( ! empty($errors)) {
        view('registration/create.view.php', ['errors' => $errors]);
    }

    $db = App::resolve(Database::class);
    $user = $db->query('SELECT * FROM users WHERE email = :email', [
      ':email' => $email,
    ])->find();

    if ( ! $user) {
        $db->query('INSERT INTO users(email, password) VALUES(:email, :password)', [
          ':email' => $email,
          ':password' => password_hash($password, PASSWORD_BCRYPT),
        ]);
        $_SESSION['user'] = ['email' => $email];
    }
    header('location: /');
    exit();