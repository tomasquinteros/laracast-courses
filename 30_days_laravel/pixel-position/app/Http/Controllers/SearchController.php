<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\Job;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class SearchController extends Controller
    {

        public function __invoke(Request $request): View
        {
            $jobs = Job::query()
              ->with(['employer', 'tags'])
              ->where('title', 'LIKE', '%'.request('q').'%')
              ->get();

            return view('results.index', ['jobs' => $jobs]);
        }

    }