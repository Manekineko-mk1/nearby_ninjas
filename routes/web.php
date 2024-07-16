<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    $jobs = Job::all();
    
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);     
});

Route::get('/jobs/{id}', function ($id) {

    $job = Job::find($id);

    //dd is a helper function that dumps the variable and ends the script execution
    //dd($job);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});