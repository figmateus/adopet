<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('pet.index');
        }

        if(Auth::guard('owners')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->route('owner.PetRegister');
        }

        return back()->withErrors([
            'email' => 'Email ou senha incorreto!',
        ])->onlyInput('email');
    }

    public function logoff(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logoff Realizado Com Sucesso');
    }
}
