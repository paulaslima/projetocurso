@extends('Layouts.layout')

@push('css')

@endpush

@if(Session::has('success'))
    toastr["success"]("<b>SUCESSO: </b> </br>
    {{Session::get('success') }} ");
@endif  

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  
</header>

<div class="container w3-left" style="padding-left:120px">

  <div class="card">
    <div class="card-header">
      Encontramos estes livros na sua estante!
    </div>
          
    <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Título</th>
              <th scope="col">Autor</th>
              <th scope="col">Editora</th>
              <th scope="col">Gênero</th>
              <th scope="col" colspan="2">Ações</th>
              
            </tr>
          </thead>
          <tbody>
          @foreach($livros as $livro)
            <tr>
              <th scope="row">{{$livro->id}}</th>
              <td>{{$livro->titulo}}</td>
              <td>{{$livro->autor}}</td>
              <td>{{$livro->editora}}</td>
              <td>{{$livro->genero}}</td>
              <td>
                <a href="{{ route('livro.edit',[$livro->id]) }}" 
                  class="btn btn-primary btn-sm">Editar</a> 
                  </td>
                <!--<span data-url="{{ route('livro.destroy',[$livro->id]) }}" 
                    data-idLivro='{{$livro->id}}' 
                    class="btn btn-danger btn-sm text-white deleteButton">
                    <span class='d-none d-md-inline'>Deletar</span>
                </span>  -->
                <td>
                <form method="POST" action="{{ route('livro.destroy',[$livro->id]) }}">
                {{csrf_field()}}
                @method('DELETE')
                  <input class="btn btn-danger btn-sm" type="submit" value="Excluir"> </form>

              </td> 
            </tr>
            @endforeach
          </tbody>
        </table>
        </div> <!--fecha o cardbody-->
            <div class="card-footer text-right">
            <a href="{{ route('livro.create') }}" class="btn btn-secondary">Adicionar</a>
            <a href="{{ url()->previous() }}" class="btn btn-secondary">Voltar</a> 
            </div> <!--fecha o footer-->

  </div>
</div>
@endsection
    @push('scripts')

<!--
<script>

  $('.deleteButton').on('click', function (e) {
        var url = $(this).data('url');
        var idLivro = $(this).data('idLivro');
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            method: 'DELETE',
            url: url
        });
        $.ajax({
            data: {
                'idLivro': idLivro,
            },
            success: function (data) {
                console.log(data);
                if (data['status'] ?? '' == 'success') {
                    if (data['reload'] ?? '') {
                        location.reload();
                    }
                } else {
                   console.log('error');
                }
            },
            error: function (data) {
                console.log(data);
            }
        });
      });  
  </script>    -->

@endpush