@extends('layouts.panel')
@section('page_title','Perfil')
@section('sub_title','Datos Personales')
@section('page_content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-1">
                <div class="form-group has-feedback">
                    <label for="usu" class="col-md-3">Nombre de usuario:</label>
                    <div class="col-lg-9">
                        {{--<input type="text" class="form-control" placeholder="Carnet de Identidad" name="name" id="usu   " required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>--}}
                        <p>{{ strtoupper($user->name)}}</p>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <label for="usu" class="col-md-3">Correo Electronico:</label>
                    <div class="col-lg-9">
                        {{--<input type="text" class="form-control" placeholder="Carnet de Identidad" name="name" id="usu   " required>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>--}}
                        <p>{{ strtoupper($user->email)}}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-5">

            </div>
        </div>
    </div>

@endsection