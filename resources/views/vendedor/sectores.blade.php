@extends('layouts.panel')
@section('page_title','Vendedor')
@section('sub_title','Vendedor')
@section('page_content')

{{--modal evento--}}
<div class="modal fade" id="edit_sector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Editar Sector</h4>
            </div>
            <div class="modal-body">
                @include('vendedor.forms.localidad')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
{{--fin modal evento--}}

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Sector</th>
            <th>Cantidad</th>
            <th>Precio</th>

            <th>Acciones</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1,001</td>
            <td>Palco</td>
            <td>ipsum</td>
            <td>dolor</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>

        </tr>
        <tr>
            <td>1,002</td>
            <td>Butaca</td>
            <td>consectetur</td>
            <td>adipiscing</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>

        </tr>
        <tr>
            <td>1,003</td>
            <td>Preferencia</td>
            <td>nec</td>
            <td>odio</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>
        </tr>
        <tr>
            <td>1,003</td>
            <td>libero</td>
            <td>Sed</td>
            <td>cursus</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>
        </tr>
        <tr>
            <td>1,004</td>
            <td>General</td>
            <td>diam</td>
            <td>Sed</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>
        </tr>
        <tr>
            <td>1,005</td>
            <td>Curva Norte</td>
            <td>quis</td>
            <td>sem</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>
        </tr>
        <tr>
            <td>1,006</td>
            <td>Curva Sur</td>
            <td>elementum</td>
            <td>imperdiet</td>

            <td>
                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#edit_sector">Actualizar</button>
            </td>
        </tr>

        </tbody>
    </table>
</div>

@endsection