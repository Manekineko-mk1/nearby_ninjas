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
// Note: This route should be placed above the route that displays a single job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// Show a single job
Route::get('jobs/{id}', function ($id) {

    $job = Job::find($id);

    //dd is a helper function that dumps the variable and ends the script execution
    //dd($job);

    return view('jobs.show', ['job' => $job]);
});

// POST a job
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


// Edit a single job
Route::get('jobs/{id}/edit', function ($id) {

    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});


// Update a single job
Route::patch('jobs/{id}', function ($id) {
    // Validate the request
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // Authenticate the user (ONHOLD)

    // Find and update the job
    $job = Job::findOrFail($id);
    
    // Presist the changes to the database
    $job->update([
        'title' => request('title'),
        'description' => request('description'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

// Delete a single job
Route::delete('jobs/{id}', function ($id) {
    // Authenticate the user (ONHOLD)

    // Find the job and presist the changes
    Job::findOrFail($id)->delete();
 
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});