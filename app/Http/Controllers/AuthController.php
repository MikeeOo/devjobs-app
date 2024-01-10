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
    public function registerView(): View
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request): RedirectResponse
    {
        User::create($request->all());

        return redirect(route('login.view'));
    }

    public function loginView(): View
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->intended(route('home.view'));
        }

        return back();
    }

    public function logout()
    {
    }
}
