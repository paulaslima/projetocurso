@extends('Layouts.layout')

@push('css')

@endpush

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  
</header>

<div class="container" style="width: 30%">
          <div class="card">
                  <div class="card-header">
                  <h4>Bem-vindo(a)!</h4>
                  </div>
              <div class="card-body">
                  <p>Use o menu abaixo para navegar.</p>
                <div>
                <a href="{{route('livro.index')}}" class="btn btn-basic btn-block btn-outline-secondary">Ver o que tem na minha estante</a>
                <a href="{{route('livro.create')}}" class="btn btn-basic btn-block btn-outline-secondary">Adicionar mais um livro</a>
                </div> <br>
               </div>
               <div class="card-footer text-right">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a> 
              </div> <!--fecha o footer--> 
          </div>
  </div>






    @endsection
    @push('scripts')
    
  


@endpush