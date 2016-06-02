@extends('layouts.panel')
@section('title','Vendedor')
@section('panel_content')
@section('cabecera','Entradas')


<div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Seleccione un evento <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
        <li><a href="#">Bolivia VS Argentina</a></li>
        <li><a href="#">Bolivia VS Colombia</a></li>
    </ul>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Cantidad Entradas</th>
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