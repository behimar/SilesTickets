@extends('layouts.panel')
@section('page_title','Perfil')
@section('sub_title','Ingrese sus Datos Personales')
@section('page_content')
    @include('partials.errors')


    <div class="container-fluid">
        {{-- <form class="form-horizontal" action="{{route('updateProfile',['id' => Auth::User()->id])}}" method="POST" data-toggle="validator"> --}}
        {!! Form::model($user,['route'=>['updateProfile', 'id' => Auth::User()->id],'method'=>'PUT', 'class'=>'form-horizontal', 'data-toggle'=>'validator']) !!}
            @include('profile.forms.editForm')
        {!! Form::close() !!}
    </div>

@endsection


