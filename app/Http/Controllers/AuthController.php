<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(): View
    {
        return view('auth.signup');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        User::create($request->all());

        return redirect(route('login'))->with('login-success', 'You\'re in! Login to begin.');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function attempt(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(route('index'))->with('success', 'Login successful!');
        }

        return back();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect(route('index'))->with('success', 'You have been logged out!');
    }
}
