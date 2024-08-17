<?php

    require 'functions.php';
    //require 'router.php';
    require 'Database.php';

    $config = [
      'host' => 'localhost',
      'port' => 3306,
      'dbname' => 'myapp',
      'charset' => 'utf8mb4',
    ];
    $id = $_GET['id'];
    $db = new Database($config);
    $data = $db->query('SELECT * FROM posts WHERE id = :id', [':id' => $id])->fetchAll(PDO::FETCH_ASSOC);
    foreach ($data as $element) {
        echo "<li>".$element['title']."</li>";
    }