@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<div class="container-custom">
    <h1 class="title-aux">Editar Facultad</h1>
    <form action="{{url('/facultades/editar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Codigo Facultad</label>
            <input readonly value="{{$facultad->cod_facultad}}" type="input" class="form-control" id="codfacultad" placeholder="Codigo" name="codfacultad">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre Facultad</label>
            <input value="{{$facultad->nom_facultad}}" type="input" class="form-control" id="nomfacultad" placeholder="Nombre" name="nomfacultad">
        </div>
        <div class="mb-3">
            <button class="btn btn-info btn-custom" type="submit">Actualizar</button>
            <a class ="btn btn-danger btn-cancel-custom" href="/facultades/listado">Cancelar</a>
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