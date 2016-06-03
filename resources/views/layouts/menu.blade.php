@if(Auth::User()->type == 'administrador')
    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#users"><i class="fa fa-fw fa-users"></i> Administrar Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="users" class="collapse">
            <li>
                <a href="{{route('newUser')}}">Crear Nuevo </a>
            </li>
            <li>
                <a href="{{route('listUsers')}}">Listar Usuarios</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#ad_events"><i class="fa fa-fw fa-futbol-o"></i> AdministrarEventos <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="ad_events" class="collapse">
            <li>
                <a href="{{route('listEvents')}}">Lista de Eventos</a>
            </li>
            <li>
                <a href="{{route('localidades')}}">Localidades</a>
            </li>
        </ul>
    </li>
@elseif(Auth::User()->type == 'vendedor')

    <li>
        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-ticket"></i> Eventos <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="demo" class="collapse">
            <li>
                <a href="">Reservas</a>
            </li>
            <li>
                <a href="#">Entradas</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> DDDDashboard</a>
    </li>
    <li>
        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
    </li>
    <li>
        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
    </li>
@endif
