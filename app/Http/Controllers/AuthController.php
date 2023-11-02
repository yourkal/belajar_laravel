<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Session::flash('status', 'success');
            Session::flash('message', 'Login Berhasil');

            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Login Gagal');

        return redirect('/login');
    }

    public function logout(Request $request)
    {
        // dd('Ini Halaman Logout');

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
