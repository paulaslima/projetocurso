<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function home() {
       
        return view ('Livros/index');
    }

    //public function dashboard () {
//
    //    return view ('Livros/dashboard');
  //  }
}
