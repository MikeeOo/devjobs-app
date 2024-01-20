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

    public function store(RegisterRequest $request): RedirectResponse
    {
        User::create($request->all());

        return redirect(route('login'));
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
            return redirect()->intended(route('index'));
        }

        return back();
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();

        return redirect(route('login'));
    }
}
