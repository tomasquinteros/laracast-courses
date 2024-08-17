<?php

    use App\Http\Controllers\JobController;
    use App\Models\Job;
    use Illuminate\Support\Facades\Route;

    Route::view('/', 'home');
    Route::resource('/jobs', JobController::class);
    /*   // Index
       Route::get('/jobs', function () {
           return view('jobs.index', ['jobs' => Job::with('employer', 'tags')->latest()->simplePaginate(3)]);
       });
       // Create job
       Route::get('/jobs/create', function () {
           return view('jobs.create');
       });
       // Show
       Route::get('/jobs/{id}', function ($id) {
           return view('jobs.job', ['job' => Job::find($id)]);
       });

       // Store
       Route::post('/jobs', function () {
           request()->validate([
             'title' => ['required'],
             'salary' => ['required'],
           ]);

           Job::create([
             'title' => request('title'),
             'salary' => request('salary'),
             'employer_id' => 1,
           ]);

           return redirect('/jobs');
       });

       // View edit
       Route::get('/jobs/{id}/edit', function ($id) {
           return view('jobs.edit', ['job' => Job::find($id)]);
       });

       // Update
       Route::patch('/jobs/{id}', function ($id) {
           request()->validate([
             'title' => ['required'],
             'salary' => ['required'],
           ]);
           Job::findOrFail($id)->update(['title' => request('title'), 'salary' => request('salary')]);

           return redirect('/jobs/'.$id);
       });

       // Destroy
       Route::delete('/jobs/{id}', function ($id) {
           Job::findOrFail($id)->delete();

           return redirect('/jobs');
       });*/

    Route::view('/contact', 'contact');