@extends('Layouts.layout')

@push('css')

@endpush

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  <h1 class="w3-xlarge">ESTANTE VIRTUAL</h1>


<div class="container" style="width: 25%">
           <BR><BR>
           <h6>Realize seu login para acessar sua estante!</h6>
           <a href="" class="btn btn-basic btn-block btn-outline-secondary">Login</a>
           <h6>Novo por aqui? <br>Faça seu cadastro para começar sua estante!</h6>
           <a href="" class="btn btn-basic btn-block btn-outline-secondary">Cadastrar</a> 
    </div>
    @endsection
    @push('scripts')
    
  

<script>
        $(".cpf-mask").mask('000.000.000-00');
</script>
@endpush