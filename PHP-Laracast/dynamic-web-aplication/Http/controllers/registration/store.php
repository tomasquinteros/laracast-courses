<?php

    use Core\App;
    use Core\Database;
    use Http\Form\LoginForm;

    $email = $_POST['email'];
    $password = $_POST['password'];

    $form = new LoginForm();
    if ( ! $form->validate($email, $password)) {
        view('registration/create.view.php', ['errors' => $form->getErrors()]);
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