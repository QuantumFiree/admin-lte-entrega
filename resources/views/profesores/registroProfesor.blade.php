@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="container-custom">
    <h1 class="title-aux">Registrar Profesor</h1>
    <form action="{{url('/profesores/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Codigo Profesor</label>
            <input type="input" class="form-control" id="codProfesor" placeholder="Codigo" name="codProfesor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre Profesor</label>
            <input type="input" class="form-control" id="nomProfesor" placeholder="Nombre" name="nomProfesor">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Codigo Facultad</label>
            <input type="input" class="form-control" id="facultad" placeholder="Facultada a la que pertenece" name="facultad">
        </div>
        <div class="mb-3">
            <button class="btn btn-info btn-custom" type="submit">Registrar</button>
            <a class ="btn btn-danger btn-cancel-custom" href="/profesores/listado">Cancelar</a>
        </div>
    </form>
</div>
@stop
@section('css')
    <style>
        .container-custom{
            width: 600px;
            margin: auto;
            padding-top: 80px
        }

        .title-aux{
            padding-top: 30px;
            margin-left: 160px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        .btn-custom{
            margin-left: 260px;
        }

        .btn-cancel-custom{
            position: absolute;
            top: 100px;
            right: 260px
        }
    </style>
@stop