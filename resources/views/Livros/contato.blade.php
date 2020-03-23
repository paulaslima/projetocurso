@extends('Layouts.layout')

@section('conteudo')
<br><br><br><br>
<div class="container" style="padding:50px 16px">
    <div class="card" style="width: 25%">
        <div class="card-body"> 
        <h5 class="card-title">Me encontre por aí!</h5> 
        <br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><a href="mailto:paulaslima93@gmail.com">Gmail</a></li>
            <li class="list-group-item"><a href="https://www.linkedin.com/in/paulaslima93/">LinkedIn</a></li>
            <li class="list-group-item"><a href="https://www.facebook.com/lima.paula.br">Facebook</a></li>
            <li class="list-group-item"><a href="https://www.instagram.com/icequeenbr/">Instagram</a></li>
            <li class="list-group-item"><a href="https://github.com/paulaslima">GitHub</a></li>
            </ul>
        </div>
        <div class="card-footer text-right">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a> 
        </div> <!--fecha o footer-->
        
    </div>
</div>
@endsection