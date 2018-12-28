@extends('layouts.header')
@section('content')
<div class="container">
	<h2>Buscar Alumno</h2>
	<div class="form-group" style="margin-top: 5rem; margin-bottom: 10rem;">
		<label class="control-label col-sm-2" for="name">Nombre del Estudiante:</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" name="name">
		</div>
	</div>
	<hr>
	<table class="table table-hover" id="table2">
		<thead>
			<tr>
        		<th>Numero de Control</th>
				<th>Nombre Estudiante</th>
				<th>Carrera</th>
				<th>Edad</th>
				<th>Telefono</th>
			</tr>
		</thead>
	    <tbody id="tbody">
	    </tbody>
	</table>
</div>
<script type="text/javascript">
$( window ).on( "load", function() {
    $value="";
    $.ajax({
      type : 'get',
      url : '{{URL::to('readStudent')}}',
      data:{'readStudent':$value},
      success:function(data){
        $('#tbody').html(data);
      }
    });
});
  $('#name').on('keyup',function(){
    $value=$(this).val();
    $.ajax({
      type : 'get',
      url : '{{URL::to('readStudent')}}',
      data:{'readStudent':$value},
      success:function(data){
        $('#tbody').html(data);
      }
    });
  })
</script>
@stop
