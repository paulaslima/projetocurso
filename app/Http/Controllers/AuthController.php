<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard(){

        if(Auth::check()) {
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
        if(Auth::attempt($credentials)){
            return redirect()->route('admin');
        } else {
            return redirect()->back()->withInput()->withErrors(['Os dados informados não conferem!']);
        }
        

        
    }

    public function logout() {

        Auth::logout();
        return redirect()->route('home');
    }
}
