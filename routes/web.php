<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
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
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $jobs = [
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

    $job = Arr::first($jobs, fn($jobs) => $jobs['id'] == $id);

    //dd is a helper function that dumps the variable and ends the script execution
    //dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});