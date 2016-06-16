@extends('layouts.panel')
@section('page_title','Admin')
@section('sub_title','Editar de Eventos')
@section('page_content')
    @include('partials.errors')
    <div class="container-fluid">
        {!! Form::model($event,['route'=>['updateEvent', 'id' => $event->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
            @include('admin.forms.editaEvento')
        <br>
        <button type="button" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar Evento</button>
        {!! Form::close() !!}
    </div>
@endsection