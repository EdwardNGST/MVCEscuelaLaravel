@extends('layouts.header')
@section('content')
<div class="container">
	<form class="form-horizontal" id="form_delete">
		<div class="form-group">
			<label class="control-label col-sm-2" for="ncontrol">Numero de Control:</label>
			<div class="col-sm-10">
				<input type="number" class="form-control" id="ncontrol" placeholder="Ingrese su numero de control" name="nc">
			</div>
		</div>
		<div id="search_alert"></div>
		<hr>
		<div class="well well-sm">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Nombre del Estudiante:</label>
				<div class="col-sm-10">
					<p class="form-control-static" id="name">---Nombre del Estudiante---</p>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Carrera:</label>
				<div class="col-sm-10">
					<p class="form-control-static" id="career">---Carrera del Estudiante---</p>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Edad:</label>
				<div class="col-sm-10">
					<p class="form-control-static" id="age">---Edad del Estudiante---</p>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Telefono:</label>
				<div class="col-sm-10">
					<p class="form-control-static" id="phone">---Telefono del Estudiante---</p>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</div>
			</div>
		</div>
	</form>
	<div id="delete_alert"></div>
</div>
<script type="text/javascript">
	var ncontrol="";
	var found=false;
	$('#ncontrol').on('keyup',function(){
		var numC=$(this).val();
		searchByNC(numC);
	});
	function searchByNC(nc){
		$.ajax({
			type : 'get',
			url : '{{URL::to('searchStudent')}}',
			data:{'nc':nc},
			success:function(data){
				if (data!="") {
					found=true;
					ncontrol=nc;
					$('#name').html(data.nameStudent);
					$("#career").html(data.career);
					$('#age').html(data.age);
					$('#phone').html(data.phone);
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
	$( "#form_delete" ).submit(function( event ) {
		if (ncontrol!="") {
		$.ajax({
			type : 'get',
			url : '{{URL::to('deleteStudent')}}',
			data:{'nc':ncontrol},
			success:function(data){
				if (data=="1") {
					$('#delete_alert').html('<div class="alert alert-success">Alumno eliminado correctamente</div>');
					clean();
				}else{
					$('#delete_alert').html('<div class="alert alert-warning">Ocurrio un problema al intentar eliminar el estudiante</div>');
				}
			},
			beforeSend:function(data){
				$('#delete_alert').html('<div class="alert alert-warning">Eliminando...</div>');
			}
		});
		}else{
			alert("Ingrese un numero de control correctamente");
		}
		event.preventDefault();
	});
	function clean(){
		$('#ncontrol').val("");
		$('#name').html("---Nombre del Estudiante---");
		$("#career").html("---Carrera del Estudiante---");
		$('#age').html("---Edad del Estudiante---");
		$('#phone').html("---Telefono del Estudiante---");
		var ncontrol="";
		var found=false;
		$('#search_alert').html('');
	}
	$( document ).ready(function() {
		var nc=getParameterByName('nc');
		if (nc!="") {
			$('#ncontrol').val(nc);
			searchByNC(nc);
		}
	});
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
</script>
@stop
