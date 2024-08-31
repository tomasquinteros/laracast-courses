<?php

    namespace App\Http\Controllers;

    use App\Models\Employer;
    use App\Models\Job;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\StoreJobRequest;
    use App\Http\Requests\UpdateJobRequest;
    use App\Models\Tag;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Arr;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\View\View;

    class JobController extends Controller
    {

        /**
         * Display a listing of the resource.
         */
        public function index(): View
        {
            $jobs = Job::query()->with(['employer', 'tags'])->latest()->get()->groupBy('featured');

            return view('jobs.index', [
              'jobsFeatured' => $jobs[0],
              'jobs' => $jobs[1],
              'tags' => Tag::all(),
            ]);
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create(): View
        {
            return view('jobs.create');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request): RedirectResponse
        {
            $attributes = $request->validate([
              'title' => 'required',
              'salary' => 'required',
              'schedule' => 'required',
              'location' => 'required',
              'url' => 'required',
              'tags' => 'nullable',
            ]);

            $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));
            if ($attributes['tags'] ?? false) {
                foreach (explode(',', $attributes['tags']) as $tag) {
                    $job->tag($tag);
                }
            }

            return redirect('/');
        }

        /**
         * Display the specified resource.
         */
        public function show(Job $job)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Job $job)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(UpdateJobRequest $request, Job $job)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Job $job)
        {
            //
        }

    }