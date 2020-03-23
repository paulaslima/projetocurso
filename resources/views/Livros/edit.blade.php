@extends('Layouts.layout')

@push('css')

@endpush

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  <h3 class="w3-xlarge"></h3>
</header>

<div class="container w3-left" style="padding-left:120px">
  <div class="card">
          <div class="card-header">
          Altere os dados do seu novo livro, em seguida, clique em "guardar".
          </div>
          <div class="card-body">    
                <form method="POST" action="{{route('livro.update', [$livro->id])}}" 
                  class="form-horizontal form-validate">
                  {{csrf_field()}}
                  @method('PUT')  
                        <div class="form-group">
                        <label >Título: </label>
                        <input type="text" name="titulo" id="titulo" class="form-control" style="width: 70%" value='{{old("titulo",$livro->titulo)}}'>  <br>

                        <label >Autor:</label>
                        <input type="text" name="autor" id="autor" class="form-control" style="width: 70%" value='{{old("autor",$livro->autor)}}'>  <br>

                        <label >Editora:</label>
                        <input type="text" name="editora" id="editora" class="form-control" style="width: 70%" value='{{old("editora",$livro->editora)}}'>   <br>

                        <label >Gênero:</label>
                        <input type="text" name="genero" id="genero" class="form-control" style="width: 70%" value='{{old("genero",$livro->genero)}}'>   
                        </div>
                      
                        <div class="container w3-right">
                                        <button type="submit" class="btn btn-secondary">Enviar</button>
                        </div>
                </form>
          </div><!--fecha o cardbody-->
            <div class="card-footer text-right">
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a> 
            </div> <!--fecha o footer-->
  </div><!--fecha o card-->
</div>
    @endsection
    @push('scripts')
    
  


@endpush