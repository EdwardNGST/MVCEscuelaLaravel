@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Modificar alumno</h2>
	<form id="form_search" class="form-horizontal">
		<div class="form-group">
			<label class="control-label col-md-2 col-sm-12" for="search">Busqueda:</label>
			<div class="col-md-9 col-sm-11">          
				<input type="number" class="form-control" id="nc" placeholder="Ingrese el numero de control" name="search">
			</div>
			<input type="submit" class="btn btn-default col-md-1 col-sm-1" id="btnSearch" value="Buscar">
		</div>
		<div id="search_alert"></div>
	</form>
	<hr>
	<form class="form-horizontal" id="form_update">
		<div class="form-group">
			<label class="control-label col-sm-2" for="name">Nombre del Estudiante:</label>
			<div class="col-sm-10">          
				<input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" name="name">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="career">Carrera:</label>
			<div class="col-sm-10">
			    <select class="form-control" id="career" name="career">
			      <option>Seleccione su Carrera</option>
			      <option>Administración</option>
			      <option>Arquitectura</option>
			      <option>Contador Público</option>
			      <option>Electromecánica</option>
			      <option>Gestión Empresarial</option>
			      <option>Sistemas Computacionales</option>
			      <option>ITICS</option>
			    </select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="age">Edad:</label>
			<div class="col-sm-10">          
				<input type="number" class="form-control" id="age" placeholder="Ingrese su edad" name="age">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="phone">Telefono:</label>
			<div class="col-sm-10">          
				<input type="number" class="form-control" id="phone" placeholder="Ingrese su telefono" name="phone">
			</div>
		</div>
		<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-warning">Actualizar</button>
			</div>
		</div>
	</form>
	<div id="update_alert"></div>
</div>
<script type="text/javascript">
	var ncontrol="";
	var found=false;
	$( "#form_search" ).submit(function( event ) {
		ncontrol=$('#nc').val();
		searchByNC(ncontrol);
	});
	$('#nc').on('keyup',function(){
		ncontrol=$(this).val();
		searchByNC(ncontrol);
	})
	$( "#form_update" ).submit(function( event ) {
		if (found) {
			name=$(this.name).val();
			career=$(this.career).val();
			age=$(this.age).val();
			phone=$(this.phone).val();
			updateStudent(ncontrol, name, career, age, phone);
		}else{
			alert("Ingrese un numero de control correctamente");
		}
		event.preventDefault();
	});
	function searchByNC(nc){
	    $.ajax({
	      type : 'get',
	      url : '{{URL::to('searchStudent')}}',
	      data:{'nc':nc},
	      success:function(data){
		      if (data!="") {
		      	found=true;
		     	$('#name').val(data.nameStudent);
		     	$("#career").val(data.career);
		     	$('#age').val(data.age);
		     	$('#phone').val(data.phone);
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
	function updateStudent(nc, name, career, age, phone){
        var vars = {
	        "nc": nc,
	        "name": name,
	        "career": career,
	        "age": age,
	        "phone": phone
        };
	    $.ajax({
	      type : 'get',
	      url : '{{URL::to('updateStudent')}}',
	      data:vars,
	      success:function(data){
		      if (data=="1") {
		      	$('#update_alert').html('<div class="alert alert-success">Datos actualizados correctamente</div>');
		      	clean();
		      }else{
		      	$('#update_alert').html('<div class="alert alert-warning">Ocurrio un problema con la actualización</div>');
		      }
	      },
	      beforeSend:function(data){
	      	$('#update_alert').html('<div class="alert alert-warning">Actualizando...</div>');
	      }
	    });
	}
	function clean(){
		ncontrol="";
		found=false;
		$('#nc').val("");
		$('#name').val("");
		$("#career").val("");
		$('#age').val("");
		$('#phone').val("");
		$('#search_alert').html('');
	}
</script>
@stop