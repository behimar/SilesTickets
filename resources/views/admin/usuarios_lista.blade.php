@extends('layouts.panel')
@section('page_title','Administrador')
@section('sub_title','Lista de Usuarios')
@section('page_content')
    @include('partials.errors')
    @include('partials.messages')

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre de Usuario</th>
                    <th>Correo Electronico</th>
                    <th>Tipo de Usuario</th>
                    <th>Fecha de Registro</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as  $user)
                <tr>
                    @if($user->type != 'administrador')
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            <a href="" class="btn btn-success">Actualizar</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>


@endsection