@extends('layouts.client')
@section('client')
    @foreach($events as $event)
        <div class="row">
            <div class="jumbotron">
                <div class="container">
                    <div class="col-md-6">
                        <img src="../images/default.png" alt="" class="img-responsive" width="200">
                    </div>
                    <div class="col-md-6">
                        <h4>{{$event->titulo}}</h4>
                        <p>{{$event->descripccion}}</p>
                        <p>Fecha del Partido:<strong>{{$event->fecha_event}} </strong></p>
                        <a href="{{route('verPartido', $event->id)}}" class="btn btn-success btn-lg"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Adquirir Entradas</a>
                    </div>
                </div>

            </div>
        </div>
    @endforeach
    {!! $events->render() !!}


@endsection