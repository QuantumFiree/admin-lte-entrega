@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    



@stop

@section('content')
<div class="container-aux">
<h1 class="title-aux">Facultades</h1></br>
<a class ="btn btn-success btn-custom" href="/facultades/registrar">Adicionar</a>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php
        $row = 0;
    @endphp
    @foreach ($facultades as $facultad)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$facultad->cod_facultad}}</td>
      <td>{{$facultad->nom_facultad}}</td>
      <td>
        <a class ="btn btn-warning" href="{{route('viewEditarFacultad', $facultad->cod_facultad)}}">Editar</a>
        <a class ="btn btn-danger" href="{{route('eliminarFacultad', $facultad->cod_facultad)}}">Eliminar</a>
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
        width: 600px
      }

      .btn-custom{
        position: absolute;
        margin-left: 210px;
        top: 120px
      }
    </style>
@stop

@section('js')
    <script> console.log('Felipe Arteaga'); </script>
@stop

