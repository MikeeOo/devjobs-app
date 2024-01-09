<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

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

    public function login()
    {
    }

    public function logout()
    {
    }
}
