@extends('layouts.panel')
@section('page_title','Perfil')
@section('sub_title','Ingrese sus Datos Personales')
@section('page_content')
    <div class="container-fluid">
        <form class="form-horizontal" action="{{route('create',['id' => Auth::User()->id])}}" method="POST" data-toggle="validator">
            @include('profile.forms.formulario')
        </form>
    </div>

@endsection