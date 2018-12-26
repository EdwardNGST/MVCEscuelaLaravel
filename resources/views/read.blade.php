@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Buscar Alumno</h2>
	<div class="form-group" style="margin-top: 5rem; margin-bottom: 10rem;">
		<label class="control-label col-sm-2" for="ncS">Nombre del Estudiante:</label>
		<div class="col-sm-10">          
			<input type="text" class="form-control" id="ncS" placeholder="Ingrese su nombre" name="nc">
		</div>
	</div>
	<hr>
	<table class="table table-hover">
		<thead>
			<tr>
        		<th>Numero de Control</th>
				<th>Nombre Estudiante</th>
				<th>Carrera</th>
				<th>Edad</th>
				<th>Telefono</th>
			</tr>
		</thead>
		<tbody>
			<tr>
			</tr>
		</tbody>
	</table>
</div>
@stop
