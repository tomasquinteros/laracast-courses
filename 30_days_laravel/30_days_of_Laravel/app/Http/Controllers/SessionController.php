<?php

    namespace App\Http\Controllers;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Validation\ValidationException;
    use Illuminate\View\View;

    use function PHPUnit\Framework\throwException;

    class SessionController extends Controller
    {

        public function create(): View
        {
            return view('auth.login');
        }

        public function store(Request $request): ValidationException|RedirectResponse
        {
            $attributes = $request->validate(['email' => 'required|email', 'password' => 'required']);
            if ( ! Auth::attempt($attributes)) {
                return ValidationException::withMessages(['email' => 'These credentials do not match our records.']);
            }
            $request->session()->regenerate();

            return redirect('/jobs');
        }

        public function destroy(): RedirectResponse
        {
            Auth::logout();

            return redirect('/login');
        }

    }