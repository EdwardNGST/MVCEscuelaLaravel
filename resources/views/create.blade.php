@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Insertar nuevo alumno</h2>
	{!!Form::open(['route'=>'newStudent', 'method'=>'POST', 'class'=>'form-horizontal'])!!}
		<div class="form-group">
			{!!Form::label('text', 'Numero de Control: ', array('class' => 'control-label col-sm-2'))!!}
			<div class="col-sm-10">
				{!!Form::number('nc', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su numero de control'])!!}
			</div>
		</div>
		<div class="form-group">
			{!!Form::label('text', 'Nombre del Estudiante:', array('class' => 'control-label col-sm-2'))!!}
			<div class="col-sm-10">
				{!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su nombre'])!!}
			</div>
		</div>
		<div class="form-group">
			{!!Form::label('text', 'Carrera:', array('class' => 'control-label col-sm-2'))!!}
			<div class="col-sm-10">
				{!!Form::select('career', array(
					'null' => 'Seleccione su carrera',
					'Administración' => 'Administración',
					'Arquitectura' => 'Arquitectura',
					'Contador Público' => 'Contador Público',
					'Electromecánica' => 'Electromecánica',
					'Gestión Empresarial' => 'Gestión Empresarial',
					'Sistemas Computacionales' => 'Sistemas Computacionales',
					'ITICS' => 'ITICS'
				), 
				null, array('class'=>'form-control','style'=>'' )
				)!!}
			</div>
		</div>
		<div class="form-group">
			{!!Form::label('text', 'Edad:', array('class' => 'control-label col-sm-2'))!!}
			<div class="col-sm-10">
				{!!Form::number('age', null, ['class'=>'form-control', 'placeholder'=>'Ingrese su edad'])!!}
			</div>
		</div>
		<div class="form-group">
			{!!Form::label('text', 'Telefono:', array('class' => 'control-label col-sm-2'))!!}
			<div class="col-sm-10">
				{!!Form::number('phone', '', ['class'=>'form-control', 'placeholder'=>'Ingrese su telefono'])!!}
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				{!!Form::submit('Registrar', ['class'=>'btn btn-default'])!!}
			</div>
		</div>
	{!!Form::close()!!}
</div>
@stop
