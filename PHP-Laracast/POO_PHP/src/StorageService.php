<?php

namespace Tomasdev\PooPhp;
use Tomasdev\PooPhp\StorageInterface;

class StorageService
{
    public function resolvePut(StorageInterface $model, $path, $body): void
    {
        $model->put($path, $body);
    }
}