@extends('Layouts.layout')

@section('conteudo')

<div class="container" style="padding:50px 16px">
<h1> Sobre o projeto </h1>

<p>O iShelf é, inicialmente, um projeto feito como uma espécie de trabalho de conclusão de curso oferecido pelo Senai Resende 
em parceria com a empresa de tecnologia PerfectPay. </p>
<p>Como projeto, foi pedido que se criasse um sistema web que fosse capaz de cadastrar quaisquer intens que fossem, de forma a utilizar
todo o conteúdo ministrado durante o curso. O conteúdo a ser cadastrado ficaria a critério do aluno.</p>
<p>A ideia é fazer com que o aluno utilize os conceitos do padrão de projetos MVC, conceitos de rotas, conceitos de migrations, e outros conceitos
abordados durante as 20 horas do curso. Além disso, o aluno deveria acrescentar, por meio de pesquisas próprias, novas funcionalidades ao sistema 
além das citadas acima.</p>
<p>Neste projeto que criei e entitulei de iShelf, eu fiz uso dos conceitos de MVC, das rotas amigáveis, das migrations, além de usar 
o recurso do próprio framework para implementar os cadastros de usuários, tendo em vista que o Laravel utiliza a encriptação das senhas,
de forma "nativa" do framework. Implementei o conceito de login, que não foi apresentado nas 20h de curso, aprimorei o uso das migrations
fazendo relacionamento entre as tabelas de usuários e de livros cadastrados, de forma que o usuário devesse se cadastar para ter acesso ao sistema,
cadastra um livro para colocar em seu acervo, e consulta o que há em sua estante, onde a consulta traz apenas os títulos cadastrado pelo usuário
que está logado no momento.</p>
<p>Para tratamento de erros, foi feito o uso de mensagens impressas na tela apenas nas áreas de login e cadastro do usuário. Para cadastro dos itens
a serem guardados no banco, foi feito o tratamento na hora do preenchimento do formulário, de forma que nenhuma informação deveria deixar
de ser preenchida.</p>
<p>Este projeto será enviado para o repositório do GitHub para avaliações, e seguirá sendo atualizado, tendo em vista que existem muitas outras
funcionalidades a serem implementadas até mesmo para fins de aprendizado próprio.</p>
<p>Na página de Contato na nav bar estão os meios de contato comigo, que desenvolveu o projeto.</p>


<br><br><br><br>
Por Paula Sacramento de Lima.

</div>

@endsection