@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Modificar alumno</h2>
	<form id="search" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2 col-sm-12" for="search">Busqueda:</label>
			<div class="col-md-9 col-sm-11">          
				<input type="number" class="form-control" id="nc" placeholder="Ingrese el numero de control" name="search">
			</div>
			<input type="submit" class="btn btn-default col-md-1 col-sm-1" id="btnSearch" value="Buscar">
		</div>
		<div id="search_alert">
		</div>
	</form>
	<hr>
	<form class="form-horizontal" action="/action_page.php">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nameS">Nombre del Estudiante:</label>
			<div class="col-sm-10">          
				<input type="text" class="form-control" id="nameS" placeholder="Ingrese su nombre" name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="careerS">Carrera:</label>
			<div class="col-sm-10">          
				<div class="dropdown" id="careerS">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="career">Seleccione su carrera
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">Administración</a></li>
						<li><a href="#">Arquitectura</a></li>
						<li><a href="#">Contador Público</a></li>
						<li><a href="#">Electromecánica</a></li>
						<li><a href="#">Gestión Empresarial</a></li>
						<li><a href="#">Sistemas Computacionales</a></li>
						<li><a href="#">ITICS</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="ageS">Edad:</label>
			<div class="col-sm-10">          
				<input type="number" class="form-control" id="ageS" placeholder="Ingrese su edad" name="age">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="phoneS">Telefono:</label>
			<div class="col-sm-10">          
				<input type="number" class="form-control" id="phoneS" placeholder="Ingrese su telefono" name="phone">
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Actualizar</button>
			</div>
		</div>
	</form>
</div>
<script type="text/javascript">
	$( "#search" ).submit(function( event ) {
		searchByNC($('#nc').val());
	});
	$('#nc').on('keyup',function(){
		searchByNC($(this).val());
	})
	function searchByNC(nc){
	    $.ajax({
	      type : 'get',
	      url : '{{URL::to('searchStudent')}}',
	      data:{'nc':nc},
	      success:function(data){
		      if (data!="") {
		      	
		      	$('#search_alert').html('<div class="alert alert-success">Alumno encontrado!</div>');
		      }else{
		      	$('#search_alert').html('<div class="alert alert-warning">No se encuentra el alumno que busca</div>');
		      }
	      },
	      beforeSend:function(data){
	      	$('#search_alert').html('<div class="alert alert-warning">Buscando</div>');
	      }
	    });
		event.preventDefault();
	}
</script>
@stop