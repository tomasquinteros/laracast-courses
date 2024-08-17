<?php
    $data = [
      ['title' => 'Harry Potter y la piedra filosofa', 'author' => 'JK. Rowling' , 'releaseYear' => 1997],
      ['title' => 'Animales fantásticos y donde encontrarlos', 'author' => 'JK. Rowling', 'releaseYear' => 2001],
      ['title' => 'Death Note', 'author' => 'Tsugumi Oba', 'releaseYear' => 2003],
      ['title' => 'Black Clover', 'author' => 'Yuki Tabata' , 'releaseYear' => 2015]
    ];

    $filteredData = array_filter($data, fn($item) => $item['releaseYear'] >= 2000);

    require 'index.view.php';