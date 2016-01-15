<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Auth\AuthController as Controller;

class AuthController extends Controller
{
    protected $guard = 'users';
    protected $redirectTo = 'users';

    public function index()
    {
        return view('users.auth');
    }
}
