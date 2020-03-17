<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){

        if(Auth::check() === true) {
            return view('Livros.dashboard');
        }
        return redirect()->route('admin.login');
    }

    public function showLoginForm(){

        return view ('Livros.formLogin');
    }

    public function login(Request $request){
        $credentials = [

        'email' => $request->email,
        'password' => $request->password,
        ];
        Auth::attempt($credentials);

        return redirect()->route('admin');
    }

    public function logout() {

        Auth::logout();
        return redirect()->route('admin');
    }
}
