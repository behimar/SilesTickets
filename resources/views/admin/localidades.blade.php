@extends('layouts.panel')
@section('page_title','Vendedor')
@section('sub_title','Lista de Eventos')
@section('page_content')
    @include('partials.errors')
    @include('partials.messages')
    <div class="container-fluid">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Fecha de realización</th>

                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $events as $event)
                    <tr>
                        <td>{{$event->titulo}}</td>
                        <td>{{$event->fecha_event}}</td>

                        <td>
                            <a href="" class="btn btn-success">Añadir Localidades</a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection