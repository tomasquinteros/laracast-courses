<?php

namespace App;

use Aws\S3\S3Client;

class AmazonStorage implements StorageInterface
{
    private S3Client $S3Client;

    public function __construct()
    {
        $this->S3Client = new S3Client([
            'version' => 'latest',
            'us-east-1',
            'credentials' => [
                'key' => '',
                'secret' => '',
            ]
        ]);
    }

    public function put(string $path, string $content): void
    {
        try {
            $this->S3Client->putObject([
                'Bucket' => 'my-bucket',
                'Key' => $path,
                'Body' => $content,
            ]);
        } catch (\Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}