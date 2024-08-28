<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use App\Models\User;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\View\View;

    class RegisteredUserController extends Controller
    {

        public function create(): View
        {
            return view('auth.register');
        }

        public function store(Request $request): RedirectResponse
        {
            $attributes = $request->validate([
              'name' => ['required', 'string', 'max:255'], 'email' => ['required', 'string', 'email', 'max:255'],
              'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            $user = User::create($attributes);
            Auth::login($user);

            return redirect('/jobs');
        }

    }