@extends('layouts.client')
@section('client')
    <div class="jumbotron">
        <div class="container">
            <h2>{{ $evento->titulo}}</h2>
            <h3> {{ date('Y-m-d',strtotime($evento->fecha_event))}} Hrs: {{date('H:i',strtotime($evento->fecha_event))}} </h3>
            <h4>{{ $evento->descripccion }}</h4>
            <br>
            <div class="col-md-6">
                <p class="text-center">Elige tu sector!</p>
                <table class="table table-responsive">
                    <tbody>
                    @foreach( $sectores as $sectore)
                        <tr class="">
                            <td>{{$sectore->localidad}}</td>
                            <td>{{$sectore->precio}}</td>
                            <td>
                                <button class="btn bg-info"> N° Entradas
                                    <span class="badge">12</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="col-md-6">
                <img src="../images/default.png" alt="" class="img-responsive" width="350">
            </div>
        </div>
    </div>
@endsection