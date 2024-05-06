<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        if (! $job) {
            abort(404, 'Job not found');
        }

        return $job;
    }

    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'pay' => '50,000',
            ], [
                'id' => 2,
                'title' => 'Laravel Developer',
                'pay' => '55,000',
            ], [
                'id' => 3,
                'title' => 'JavaScript Developer',
                'pay' => '50,000',
            ],
        ];
    }
}
