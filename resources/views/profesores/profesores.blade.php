@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    



@stop

@section('content')
<div class="container-aux">
<h1 class="title-aux">Profesores</h1></br>
<a class ="btn btn-success btn-custom" href="{{route('viewRegistrarPrograma')}}">Adicionar</a>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Facultad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @php
        $row = 0;
    @endphp
    @foreach ($profesores as $profesor)
    @php
        $row++;
    @endphp
    <tr>
      <th scope="row">{{$row}}</th>
      <td>{{$profesor->cod_profesor}}</td>
      <td>{{$profesor->nom_profesor}}</td>
      <td>{{$profesor->nom_facultad}}</td>
      <td>
        <a class ="btn btn-warning" href="">Editar</a>
        <a class ="btn btn-danger" href="">Eliminar</a>
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
        width: 800px
      }

      .btn-custom{
        position: absolute;
        margin-left: 310px;
        top: 120px
      }
    </style>
@stop

@section('js')
    <script> console.log('Felipe Arteaga'); </script>
@stop

