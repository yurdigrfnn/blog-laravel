<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index',[
            'title' => 'Login',
            'activel' => 'login'
        ]);
    }

    public function setUser(Request $request)
    {
        $crd = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (Auth::attempt($crd)){
            $request->session()->regenerate();
            return redirect()->intended("/");
        }
        return  back()->with('error','Login Gagal!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/dashboard');
    }
}
