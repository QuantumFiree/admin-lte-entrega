@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="container-custom">
    <h1 class="title-aux">Registrar Programa</h1>
    <form action="{{url('/programas/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Codigo Programa</label>
            <input type="input" class="form-control" id="codPrograma" placeholder="Codigo" name="codPrograma">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre Programa</label>
            <input type="input" class="form-control" id="nomPrograma" placeholder="Nombre" name="nomPrograma">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Codigo Facultad</label>
            <input type="input" class="form-control" id="facultad" placeholder="Facultada a la que pertenece" name="facultad">
        </div>
        <div class="mb-3">
            <button class="btn btn-info btn-custom" type="submit">Registrar</button>
            <a class ="btn btn-danger btn-cancel-custom" href="/programas/listado">Cancelar</a>
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