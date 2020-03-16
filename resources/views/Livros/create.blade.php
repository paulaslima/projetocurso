@extends('Layouts.layout')

@push('css')

@endpush

@section('conteudo')
<header class="w3-panel w3-center w3-opacity" style="padding:50px 16px">
  <h3 class="w3-xlarge">Insira os dados do seu novo livro, em seguida, clique em "guardar".</h3>
</header>

<div class="container w3-left" style="padding-left:120px">
           <BR><BR>
           <!--<form>

      <label>Título:</label> </br>
      <input type="text"> </br>

      <label>Autor:</label> </br>
      <input type="text"> </br>

      <label>Editora:</label> </br>
      <input type="text"> </br>

      <label>Gênero:</label> </br>
      <input type="text"> </br>

      <label>Formato:</label>

      </form> -->

      <form>
          <div class="form-group">
                <label >Título : </label>
                <input type="text" class="form-control" style="width: 70%">  <br>
                <label >Autor</label>
                <input type="text" class="form-control" style="width: 70%">  <br>

                <label >Editora</label>
                <input type="text" class="form-control" style="width: 70%">   <br>

                <label >Gênero</label>
                <input type="text" class="form-control" style="width: 70%">   
          </div>
                <label>Formato:</label>
                <div class="form-group form-check">
                <input class="form-check-input" type="radio" name="radiofisico" id="radiofisico" value="opcao1">
                <label class="form-check-label" for="exampleRadios1">Físico</label>  <br>
                <input class="form-check-input" type="radio" name="radiodigital" id="radiodigital" value="opcao2">
                <label class="form-check-label" for="exampleRadios2">Digital</label>
                </div>
                <div class="container w3-right">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
  
  </div>
  
</form>
</div>
    @endsection
    @push('scripts')
    
  

<script>
        $(".cpf-mask").mask('000.000.000-00');
</script>
@endpush