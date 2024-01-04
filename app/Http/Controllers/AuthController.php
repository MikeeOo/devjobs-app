<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
    public function registerView(): View
    {
        return view('auth.register');
    }

    public function register()
    {
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
