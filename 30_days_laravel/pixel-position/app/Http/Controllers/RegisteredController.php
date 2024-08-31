<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\Rules\File;
    use Illuminate\Validation\Rules\Password;

    class RegisteredController extends Controller
    {

        /**
         * Display a listing of the resource.
         */

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view(view: 'auth.register');
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request): RedirectResponse
        {
            $userAttributes = $request->validate([
              'name' => ['required'],
              'email' => ['required', 'unique:users,email', 'email'],
              'password' => ['required', Password::min(6), 'confirmed'],
            ]);

            $employerAttributes = $request->validate([
              'employer' => ['required'],
              'employer_logo' => ['required', File::types(['png', 'jpg', 'svg'])],
            ]);

            $user = User::create($userAttributes);

            $logoPath = $request->employer_logo->store('logos'); // Guardamos los datos en storage/app/public/logos
            $user->employer()->create([
              'name' => $employerAttributes['employer'],
              'logo' => $logoPath,
            ]);

            Auth::login($user);

            return redirect('/');
        }

    }