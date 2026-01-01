<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $redirect = redirect('/')->withErrors(['email' => 'Credenciales inválidas']);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $redirect = redirect('/menu');
        }

        return $redirect;
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}