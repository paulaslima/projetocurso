<?php

namespace App\Http\Controllers\Livros;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livro;
use Illuminate\Support\Facades\Auth;
use App\User;

class LivrosController extends Controller
{
    public function home() {
        if(Auth::check() === true) {
            return view('Livros.dashboard');
        }
        return view('Livros.home');
       
    }

    public function sobre(){
        return view('Livros.sobre');
    }

    public function contato() {
        return view('Livros.contato');
    }


    public function create() {
        return view ('Livros/create');
    }

    public function store(Request $request) {
    //    
        if(Auth::check()){
        $user_id = Auth::user()->id;
           
         
        $data = $request->all();
        $livroModel = app(Livro::class);
        $livro = $livroModel->create([
            'user_id'=>$user_id,
            'titulo'=>$data['titulo'],
            'autor'=>$data['autor'],
            'editora'=>$data['editora'],
            'genero'=>$data['genero'],

        ]);
        return redirect()->route('livro.index');
        }
    }

    public function index(){

        $livroModel = app(Livro::class);
        $livros = $livroModel->where('user_id', Auth::user()->id)->get();

        return view('Livros.list', compact('livros'));
        
    }

    public function edit($id){

        $livroModel= app(Livro::class);
        $livro = $livroModel->find($id);
        return view ('Livros.edit', compact('livro'));

    }

    public function update(Request $request,$id){
        $data = $request->all();
        $livroModel= app(Livro::class);
        $livro = $livroModel->find($id);
        $livro->update([
            'titulo'=>$data['titulo'],
            'autor'=>$data['autor'],
            'editora'=>$data['editora'],
            'genero'=>$data['genero'],
        ]);
        return redirect()->route('livro.index');
    }

    public function destroy($id){
        $livroModel= app(Livro::class);
        $livro = $livroModel->find($id);
        $livro->delete();
        return redirect()->route('livro.index');
    }
}
