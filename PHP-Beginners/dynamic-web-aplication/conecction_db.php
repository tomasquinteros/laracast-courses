<?php

    function mysqlLaracastWay(): void
    {
        // TODO LARACAST WAY
        // Creamos nuestra dsn (Data source name)
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
        // Creamos nuestro PDO (primer param: $dsn, segundo el usuario de mysql y tercer el password
        $pdo = new PDO($dsn, 'tomas', 'admin');
        // Seleccionamos la tabla que queremos recuperar los datos
        $statement = $pdo->prepare('SELECT * FROM posts');
        // Ejecutamos
        $statement->execute();
        // Traemos los datos en modo array asociativo
        $posts = $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // TODO DOCUMENTATION WAY
    // Creamos los datos que nos harán falta
    function mysqlDocWay(): void
    {
        $user = 'tomas';
        $password = 'admin';
        $dsn = 'mysql:host=localhost;port=3306;dbname=myapp;charset=utf8mb4';
        // Verificamos que funcione correctamente
        try {
            // Creamos nuestra conexión
            $conn = new PDO($dsn, $user, $password);
            $data = $conn->query('SELECT * FROM posts', PDO::FETCH_ASSOC);
            echo "<h1>MÉTODO DE DOCUMENTACIÓN</h1> <br>";
            foreach ($data as $element) {
                echo "<li>".$element['title']."</li>";
            }
        } catch (PDOException $error) {
            // Si hay un error, lo corremos
            echo "Error! ".$error->getMessage();
            die();
        }
        // Para cerrar la conexión debemos dejar $data = null; y $conn = null;
    }