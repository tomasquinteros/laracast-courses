<?php

require 'vendor/autoload.php';

use Tomasdev\PooPhp\StorageService;
use Tomasdev\PooPhp\LocalStorage;

$storage = new StorageService();

$storage->resolvePut(new LocalStorage(), 'file.txt', 'Hello World!');


