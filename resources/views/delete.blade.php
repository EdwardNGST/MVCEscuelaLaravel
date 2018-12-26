@extends('layouts.header')
@section('content')
<div class="container">
<form class="form-horizontal">
			<div class="form-group">
			<label class="control-label col-sm-2" for="ncontrol">Numero de Control:</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="ncontrol" placeholder="Ingrese su numero de control" name="nc">
			</div>
		</div>
		<hr>
		<div class="well well-sm">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Nombre del Estudiante:</label>
    <div class="col-sm-10">
      <p class="form-control-static">---Nombre del Estudiante---</p>
    </div>
    </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="email">Carrera:</label>
    <div class="col-sm-10">
      <p class="form-control-static">---Carrera del Estudiante---</p>
    </div>
    </div>
          <div class="form-group">
    <label class="control-label col-sm-2" for="email">Edad:</label>
    <div class="col-sm-10">
      <p class="form-control-static">---Edad del Estudiante---</p>
    </div>
    </div>
              <div class="form-group">
    <label class="control-label col-sm-2" for="email">Telefono:</label>
    <div class="col-sm-10">
      <p class="form-control-static">---Telefono del Estudiante---</p>
    </div>
    </div>
      		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-danger">Registrar</button>
			</div>
		</div>
  </div>
</form>
</div>
@stop
