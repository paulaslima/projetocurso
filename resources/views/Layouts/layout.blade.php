<!doctype html>
<html lang="pt-br" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


    <title>Template para sticky footer e navbar fixa, usando Bootstrap.</title>

    <!-- Estilos customizados para esse template -->
    <link href="sticky-footer-navbar.css" rel="stylesheet">
  </head>

  <body class="d-flex flex-column h-100">

    <header>
      <!-- Navbar fixa -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="{{route('home')}}">iShelf</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('sobre')}}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('contato')}}">Contato</a>
            </li>

          </ul>

          <form class="form-inline mt-2 mt-md-0">

          <?php
						if(Auth::check() === true){					
						
					?>
           <a href="{{ route('admin.logout') }}" class="btn btn-secondary btn-block" type="submit">Logout</a> 
				<?php } else { ?>
          <a href="{{ route('admin') }}" class="btn btn-secondary btn-block" type="submit">Login</a> 
                <?php } ?>

          </form>

      
        </div>
      </nav>
    </header>

    <!-- Começa o conteúdo da página -->
    <main role="main" class="flex-shrink-0">
      
    @yield('conteudo')
    
   </main>

    <footer class="footer mt-auto py-3">
      <div class="container">
        <span class="text-muted">Projeto Curso Senai. </span>
      </div>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
