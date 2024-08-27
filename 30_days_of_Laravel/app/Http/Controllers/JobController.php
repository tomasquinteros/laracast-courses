<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Mail\JobPosted;
    use App\Models\Employer;
    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use App\Models\Job;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Facades\Redirect;
    use Illuminate\View\View;

    class JobController extends Controller
    {

        public function index(): View
        {
            return view('jobs.index', ['jobs' => Job::with('employer', 'tags')->latest()->simplePaginate(3)]);
        }

        public function show(Job $job): View
        {
            return view('jobs.show', ['job' => $job]);
        }

        public function create(): View
        {
            return view('jobs.create');
        }

        public function store(Request $request): View
        {
            $request->validate([
              'title' => ['required', 'min:3'],
              'salary' => ['required'],
            ]);
            $job = Job::create([
              'title' => $request['title'], 'salary' => $request['salary'], 'employer_id' => 201,
            ]);

            /*Mail::to($job->employer->user->email)->send(new JobPosted($job));*/

            return view('jobs.show', ['job' => $job]);
        }

        public function edit(Job $job): View
        {
            return view('jobs.edit', ['job' => $job]);
        }

        public function update(Request $request, Job $job): RedirectResponse
        {
            $request->validate(
              [
                'title' => ['required', 'min:3'],
                'salary' => ['required'],
              ]);
            $job->update(['title' => $request['title'], 'salary' => $request['salary']]);

            return redirect()->route('jobs.show', ['job' => $job]);
        }

        public function destroy(Job $job): RedirectResponse
        {
            $job->delete();

            return redirect()->route('jobs.index');
        }

    }