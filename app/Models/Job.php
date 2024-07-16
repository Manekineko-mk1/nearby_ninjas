<?php

namespace App\Models;

use Illuminate\Support\Arr;

// PHP user autoloading feature with psr-4 convention (see composer.json). Namespace will let autoloader to find the class file.
// For example, we have a namespace of App\Models, and the class is in the app/Models directory.
// and we have a namespace of Database\Seeders, and the class is in the database/Seeders directory.

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'PHP Developer',
                'description' => 'This is a PHP developer job description template.',
                'salary' => '$60,000 - $80,000'
            ],
            [
                'id' => 2,
                'title' => 'Python Developer',
                'description' => 'This is a Python developer job description template.',
                'salary' => '$70,000 - $90,000'
            ],
            [
                'id' => 3,
                'title' => 'Java Developer',
                'description' => 'This is a Java developer job description template.',
                'salary' => '$80,000 - $100,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job= Arr::first(static::all(), fn($jobs) => $jobs['id'] == $id);

        if (!$job) {
            abort(404);
        } else {
            return $job;
        }
    }
}

