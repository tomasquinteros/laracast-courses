<?php

namespace Tomasdev\PooPhp;
interface StorageInterface
{
    public function put(string $path, string $content): void;
}