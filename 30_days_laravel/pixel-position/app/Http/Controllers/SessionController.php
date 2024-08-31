<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Password;
    use Illuminate\Validation\ValidationException;
    use Illuminate\View\View;

    class SessionController extends Controller
    {

        public function create(): View
        {
            return view('auth.login');
        }

        /**
         * @throws \Illuminate\Validation\ValidationException
         */
        public function store(Request $request): RedirectResponse
        {
            $attributes = $request->validate([
              'email' => ['required', 'email'],
              'password' => ['required'],
            ]);

            if ( ! Auth::attempt($attributes)) {
                throw ValidationException::withMessages([
                  'email' => 'Sorry, those credentials do not match.',
                ]);
            }

            request()->session()->regenerate();

            return redirect('/');
        }

        public function destroy(string $id): RedirectResponse
        {
            Auth::logout();

            return redirect('/login');
        }

    }