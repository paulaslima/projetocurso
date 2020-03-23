@extends('Layouts.layout')

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  <h3>CADASTRAR</h3>
</header>


            <div class="container" style="width: 30%">

            <div class="card">
              <div class="card-body">   
                <form method="POST" action="{{ route('register') }}">
                       @csrf

                    <div class="form-group row">
                       
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>

                    <div class="form-group row">
                        
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Endereço de E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                     <strong>{{ $message }}</strong>
                                 </span>
                            @enderror
                       
                    </div>

                        <div class="form-group row">
                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Senha" name="password" required autocomplete="new-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                            <div class="form-group row ">
                                
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar senha" required autocomplete="new-password">
                                
                            </div>

                            <div class="form-group row mb-0">
                                
                                    <button type="submit" class="btn btn btn-basic btn-outline-secondary btn-block">
                                        {{ __('Cadastrar') }}
                                    </button>
                              
                            </div>
                </form>
                
                </div>
                <div class="card-footer text-right">
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a> 
              </div> <!--fecha o footer-->
            </div>
        
   

@endsection
