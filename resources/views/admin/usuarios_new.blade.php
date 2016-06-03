@extends('layouts.panel')
@section('page_title','Administrador')
@section('sub_title','Nuevo Usuario')
@section('page_content')
    @include('partials.errors')
    @include('partials.messages')
    <div class="container-fluid">
        <form class="form-horizontal" action="{{route('newUser')}}" method="POST" data-toggle="validator">
            {!! csrf_field() !!}
            <div class="form-group has-feedback">
                <label for="nombre" class="col-md-3 control-label">Nombre</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control validate" id="nombre" placeholder="Nombre" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label for="mail" class="col-md-3 control-label">Correo Electrónico</label>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control validate" id="mail" placeholder="Correo Electrónico" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
            </div>
            <div class="form-group has-feedback">
                <label for="inputPassword" class="col-md-3 control-label">Contraseña</label>
                <div class="col-md-9">
                    <input type="password" name="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Contraseña" required>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block">Minimo 6 caracteres</div>
                </div>
            </div>
            <div class="form-group">
                <label for="rol" class="col-md-3 control-label">Rol</label>
                <div class="col-md-9">
                    <select name="type" id="tipo" class="form-control" >
                        <option value="">Elija el tipo de usuario</option>
                        <option value="administrador">Administrador</option>
                        <option value="vendedor">Vendedor</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-3">
                <div class="col-md-3">
                    <a href="{{route('home')}}" type="button" class="btn btn-default btn-block">Volver</a>
                </div>
                <div class="col-md-3">
                    <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                </div>
            </div>

        </form>
    </div>


@endsection