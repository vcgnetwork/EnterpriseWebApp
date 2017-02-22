<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        return view('auth.logout');
    }
    
}
