@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    



@stop

@section('content')
<div class="container-aux">
<h1 class="title-aux">Estudiantes</h1></br>
<a class ="btn btn-success btn-custom" href="/estudiantes/registrar">Adicionar</a>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Programa</th>
      <th scope="col">Facultad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php
        $row = 0;
    @endphp
    @foreach ($estudiantes as $estudiante)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$estudiante->cod_estudiante}}</td>
      <td>{{$estudiante->nom_estudiante}}</td>
      <td>{{$estudiante->nom_programa}}</td>
      <td>{{$estudiante->nom_facultad}}</td>
      <td>
        <a class ="btn btn-warning" href="">Editar</a>
        <a class ="btn btn-danger" href="{{route('eliminarEstudiante', $estudiante->cod_estudiante)}}">Eliminar</a>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/resources/css/admin_custom.css">
    <style>
      .title-aux{
        padding-top: 30px;
        font-weight: bold;
      }

      .container-aux{
        text-align: center;
        margin: auto;
        width: 900px
      }

      .btn-custom{
        position: absolute;
        margin-left: 360px;
        top: 120px
      }
    </style>
@stop

@section('js')
    <script> console.log('Felipe Arteaga'); </script>
@stop

