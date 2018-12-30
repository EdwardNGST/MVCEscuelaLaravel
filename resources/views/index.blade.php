@extends('layouts.header')
@section('content')
<div class="container">
  <h2>Datos de Alumnos</h2>
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
    @foreach($students as $alumno)
    <tbody>
      <tr>
        <td>{{$alumno->nc}}</td>
        <td>{{$alumno->nameStudent}}</td>
        <td>{{$alumno->career}}</td>
        <td>{{$alumno->age}}</td>
        <td>{{$alumno->phone}}</td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
<div id="editor"></div>
<center>
  <input type="button" class="btn btn-info" id="pdf" value="Guardar en PDF" style="margin-top: 3rem;">
</center>
<script type="text/javascript">
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
$('#pdf').click(function () {
 var pdf = new jsPDF();
 pdf.addHTML($('.container')[0], function () {
     pdf.save('alumnos.pdf');
 });

});
</script>
@stop