<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\Tag;
    use Illuminate\Http\Request;
    use Illuminate\View\View;

    class TagController extends Controller
    {

        public function __invoke(Tag $tag): View
        {
            $jobs = $tag->jobs->load(['employer', 'tags']);

            return view('results.index', ['jobs' => $jobs]);
        }

    }