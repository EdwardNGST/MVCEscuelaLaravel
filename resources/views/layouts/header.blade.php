<!DOCTYPE html>
<html>
<head>
	<title>Inicio - Escuela</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<style type="text/css">
		.navbar{
			margin: 3rem;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
				<a class="navbar-brand" href="/">Escuela</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
				<!--li class="active"><a href="#">INSERTAR</a></li-->
				<li><a href="/create">INSERTAR</a></li>
				<li><a href="/read">BUSCAR</a></li>
				<li><a href="/update">ACTUALIZAR</a></li>
				<li><a href="/delete">ELIMINAR</a></li>
				</ul>
			</div>
		</div>
	</nav>
	@yield('content')
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>