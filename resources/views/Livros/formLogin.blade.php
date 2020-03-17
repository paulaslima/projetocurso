@extends('Layouts.layout')

@push('css')

@endpush

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  <h3 class="w3-xlarge">LOGIN</h3>
</header>

 <!--        <div class="container" style="width: 25%">
          ÁREA DE CONTROLE
            </div> -->

            <div class="container" style="width: 25%">
          <form class="form-signin" method="POST" action="{{route('admin.login.do')}}">
         @csrf
                <label for="email" class="sr-only">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Login" required autofocus><br>
                <label for="password" class="sr-only">Senha</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Senha" required>
                <br><br>
                <input type="submit" class="btn btn btn-basic btn-outline-secondary btn-block" value="Login"> 
              </form>
            </div>  
    @endsection
    @push('scripts')
    
  


@endpush