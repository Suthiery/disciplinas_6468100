<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Cadastro de Disciplinas</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/app.css" rel="stylesheet">

  </head>

  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Cadastro de Disciplinas</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

	<ul class="navbar-nav mr-auto">
		@auth
		<form id="logout-form" action="/logout" method="POST"> 
			{{ csrf_field() }}
			<li class="nav-item">
			<button type="submit">Sair </button>
			</li>
		</form>
		@else
		<li class="nav-item active">
		<a href="/login">Login</a> |&nbsp;
		</li>
		<li class="nav-item active">
		<a href="/register">Register</a>
		</li>
		@endauth
	</ul>
        
        <form class="form-inline mt-2 mt-md-0" method="POST" action="/disciplinas/search">
		{{ csrf_field() }}
		<input class="form-control mr-sm-2" name="text" type="text" placeholder="Buscar" aria-label="Buscar">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit"> Buscar </button>
		</form>

        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
      
	@section('content')
	@show
	
    </main>

    <footer class="footer">
      <div class="container">
        <span class="text-muted"></span>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="/assets/app.css"></script>



</body>
</html>