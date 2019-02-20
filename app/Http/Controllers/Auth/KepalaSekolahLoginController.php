<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepalaSekolahLoginController extends Controller
{
    protected $username = 'username';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
        return view('auth.login-kepala-sekolah');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6',
        ]);

        // dd($credentials);
        if (Auth::guard('dataKepalaSekolah')->attempt($request->only(['email', 'password']))) {
            return redirect()->intended('/kepala-sekolah/laporan');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();
        \Session::flush();
        return redirect()->route('kepalaSekolah.login');
    }
}
