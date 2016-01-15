<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\AuthController as Controller;

class AuthController extends Controller
{
    protected $guard = 'admin';
    protected $redirectTo = 'admin';

    public function index()
    {
        return view('admin.auth');
    }
}
