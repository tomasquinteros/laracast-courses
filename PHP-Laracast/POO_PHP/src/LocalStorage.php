<?php

namespace Tomasdev\PooPhp;
use Tomasdev\PooPhp\StorageInterface;

class LocalStorage implements StorageInterface
{
    public function put(string $path, string $content): void
    {
        if (!is_dir('storage')) {
            if (!mkdir('storage', 0777, true) && !is_dir('storage')) {
                throw new \RuntimeException(sprintf('Directory "%s" was not created', 'storage'));
            }
        }
        if (!file_exists('storage/' . $path)) {
            file_put_contents('storage/' . $path, $content);
        } else {
            echo 'Ocurrio un erro al guardar.';
        }
    }
}