@extends('layouts.panel')
@section('page_title','Vendedor')
@section('sub_title','Habilitar localidades')
@section('page_content')
    @include('partials.errors')
    @include('partials.messages')
    <div class="container-fluid">
        {{--   *****aun no lo usaremos
        <form class="form-horizontal" action="{{route('newUser')}}" method="POST">
            {!! csrf_field() !!}
            <label for="list" class="col-md-3 control-label">Seleccione un Evento</label>
            <div class="col-md-9">

                <select class="form-control" name="event" id="list">
                    <option value="">Eliga un Evento</option>
                    @foreach($events as $event)
                        <option value="{{$event->id}}">{{$event->titulo}}</option>
                    @endforeach
                </select>
            </div>
        </form>
        --}}
        @foreach($events as $event)
            {{--modal evento--}}
            <div class="modal fade" id="nueva_localidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Nueva Localidad</h4>
                        </div>
                        <form action="{{route('localidades',['id' => $event->id])}}" method="post" data-toggle="validator">
                            <div class="modal-body">
                                @include('admin.forms.localidad')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Crear Localidad</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{--fin modal evento--}}
            <h3> <strong>{{$event->titulo}}</strong> </h3>
            <h4>{{$event->fecha_event}}</h4>

            <hr>
            @if ($event->location->count() > 0)
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#nueva_localidad">Nuevo Evento</button>
            @endif
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Localidad</th>
                        <th>Cantidad Disponible</th>
                        <th>Precio</th>

                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($event->location->count() > 0)
                        @foreach($event->location as $loca)
                        <tr>
                            <td>{{$loca->localidad}}</td>
                            <td>{{$loca->cantidad}}</td>
                            <td>Bs. {{$loca->precio}}</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm">Editar Localidades</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <div class="alert alert-warning " role="alert">
                            <i class="fa fa-exclamation-triangle fa-3x" aria-hidden="true"></i>
                            <strong>&nbsp; :( &nbsp;</strong> No se registraron localidades &nbsp;
                            <a href="{{-- URL::route('lists.tasks.create', [$list->id]) --}}"
                               class='btn btn-primary' data-toggle="modal" data-target="#nueva_localidad">Añadir Localidad</a>
                        </div>
                        <p>

                        </p>
                    @endif
                    {{--
                    @foreach( $events as $event)
                        <tr>
                            <td>{{$event->titulo}}</td>
                            <td>{{$event->fecha_event}}</td>



                        </tr>
                    @endforeach
                    --}}
                    </tbody>
                </table>
            </div>
        @endforeach

    </div>



@endsection