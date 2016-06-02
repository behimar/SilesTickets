@extends('layouts.panel')
@section('page_title','Vendedor')
@section('sub_title','Lista de Eventos')
@section('page_content')
    @include('partials.errors')
    @include('partials.messages')
    {{--modal evento--}}
    <div class="modal fade" id="nuevo_evento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Evento Nuevo</h4>
                    <img src=""class="t" alt="">
                </div>
                <form action="{{route('listEvents')}}" method="post" data-toggle="validator">
                    <div class="modal-body">
                        @include('vendedor.forms.evento')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Crear Evento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--fin modal evento--}}
    <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#nuevo_evento">Nuevo Evento</button>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Fecha de realización</th>
                    <th>Descripción</th>
                    <th>N° Localidades</th>
                    <th colspan="2" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $events as $event)
                    <tr>
                        <td>{{$event->titulo}}</td>
                        <td>{{$event->fecha_event}}</td>
                        <td>{{$event->descripccion}}</td>
                        <td>{{$event->numEntradas}}</td>
                        <td>
                            <a href="" class="btn btn-success">Actualizar</a>
                        </td>
                        <td>
                            <a href="" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection