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
@stop