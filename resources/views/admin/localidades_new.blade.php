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
            <h3> <strong>{{$event->titulo}}</strong> </h3>
            <h4>{{$event->fecha_event}}</h4>
            <hr>
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
                                <a href="{{route('editLocation',$loca->id)}}" class="btn btn-success btn-sm">Editar Localidades</a>
                            </td>
                            <td>
                                <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                        @endforeach
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