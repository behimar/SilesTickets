@extends('layouts.panel')
@section('page_title','Perfil')
@section('sub_title','No tiene registro aún')
@section('page_content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h2>No tiene registrado sus datos de perfil</h2>
            <div class="alert alert-warning " role="alert">
                <i class="fa fa-exclamation-triangle fa-4x" aria-hidden="true"></i>
                <strong>{{ strtoupper(Auth::User()->name)}}!</strong> no tiene registrados sus datos personales ...
            </div>
            <a href="{{route('create')}}" class="btn btn-primary">Registrar Datos Personales</a>
            <a href="{{route('home')}}" class="btn btn-default">Volver</a>
        </div>
    </div>

@endsection