<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {  
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->cursorPaginate(3);

    return view('jobs', ['jobs' => $jobs]);     
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