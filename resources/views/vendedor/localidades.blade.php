@extends('layouts.panel')
@section('page_title','Vendedor')
@section('sub_title','Vendedor')
@section('page_content')


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Evento #1
                </a>

            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Area del Estadio</th>
                            <th>Cantidad Entrdas Disponibles</th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Butaca</td>
                                <td>3000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Recta</td>
                                <td>7000</td>
                            </tr>

                        </tbody>
                        <a type="" class="btn btn-success btn-xs" href="sectores">Editar Sector</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Evento #2
                </a>
            </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Area del Estadio</th>
                            <th>Cantidad Entradas Disponibles</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Butaca</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Recta</td>
                            <td>7000</td>
                        </tr>

                        </tbody>
                        <a type="" class="btn btn-success btn-xs" href="sectores">Editar Sector</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Evento #3
                </a>
            </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Area del Estadio</th>
                            <th>Cantidad Entrdas Disponibles</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Butaca</td>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Recta</td>
                            <td>7000</td>
                        </tr>

                        </tbody>
                        <a type="" class="btn btn-success btn-xs" href="sectores">Editar Sector</a>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection