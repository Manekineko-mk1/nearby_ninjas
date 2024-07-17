<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {  
    return view('home');
});

// View to display all jobs
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->cursorPaginate(10);

    return view('jobs.index', ['jobs' => $jobs]);     
});

// View to create a job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// View to display a single job
Route::get('jobs/{id}', function ($id) {

    $job = Job::find($id);

    //dd is a helper function that dumps the variable and ends the script execution
    //dd($job);

    return view('jobs.show', ['job' => $job]);
});

// Route to post a job
Route::post('/jobs', function () {
    //dd(request()->all());

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'description' => request('description'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});


Route::get('/contact', function () {
    return view('contact');
});