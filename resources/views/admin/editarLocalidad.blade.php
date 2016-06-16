@extends('layouts.panel')
@section('page_title','Admin')
@section('sub_title','Editar Localidades')
@section('page_content')
    @include('partials.errors')
    <div class="container-fluid">
        {!! Form::model($loca,['route'=>['updateLocation', 'id' => $loca->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
        @include('admin.forms.editaEvento')
        <br>
        <button type="button" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary">Actualizar Evento</button>
        {!! Form::close() !!}
    </div>
@endsection