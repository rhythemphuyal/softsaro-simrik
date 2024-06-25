<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {

        return view('admin/auth/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()
            ->with('error', 'Invalid Email/Password!');


    }
}
