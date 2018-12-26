@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Modificar alumno</h2>
	<form class="form-horizontal" action="/action_page.php">
		<div class="form-group">
			<label class="control-label col-sm-2" for="nameS">Nombre del Estudiante:</label>
			<div class="col-sm-10">          
				<input type="text" class="form-control" id="nameS" placeholder="Ingrese su nombre" name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="careerS">Carrera del Estudiante:</label>
			<div class="col-sm-10">          
				<div class="dropdown" id="careerS">
					<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" name="career">Carrera
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
@stop
