@extends('layouts.master')
@section('title','Portada')
@section('content')
    @include('partials.errors')
    {{--modal login--}}
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Iniciar Sesión en <img src="../images/siles-mini-logo.png" class="t" alt="" width="100"> </h4>
                </div>
                <form action="{{route('login')}}" method="POST">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        @include('auth.welcome.login')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--fin modal login--}}
    {{--modal registrarse--}}
    <div class="modal fade" id="registrarse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Registrarse en <img src="../images/siles-mini-logo.png" class="t" alt="" width="100"></h4>
                    <img src=""class="t" alt="">
                </div>
                <form action="{{route('register')}}" method="POST" data-toggle="validator">
                    {!! csrf_field() !!}
                    <div class="modal-body">
                        @include('auth.welcome.registrarse')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--fin modal registrarse--}}
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Siles Tickets</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="" class="btn  " data-toggle="modal" data-target="#login">Ingresar</a>
                    </li>
                    <li>
                        <a href="" class="btn  " data-toggle="modal" data-target="#registrarse">Registrarse</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <div id="page-wrapper">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="../images/image-01.jpg" alt="" class="center">
                    <div class="carousel-caption">
                        <h3><img src="../images/logo.png" alt=""></h3>
                        <p></p>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/image-04.png" alt="" class="center">
                    <div class="carousel-caption">
                        <h3><img src="../images/logo.png" alt=""></h3>
                        <p></p>
                    </div>
                </div>
                <div class="item">
                    <img src="../images/image-05.png" alt="" class="center">
                    <div class="carousel-caption">
                        <h3><img src="../images/logo.png" alt=""></h3>
                        <p></p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container">
            <br>
            <br>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="thumbnail">
                        <img src="../images/portfolio1.jpg" alt="" class="img-responsive">
                        <h4>Bolivar Vs The Strongest</h4>
                        <p>Clasico paceño a jugarse por la 3ra fecha del torneo clausura</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-md-6">
                    <div class="thumbnail">
                        <img src="../images/portfolio2.jpg" alt="" class="img-responsive">
                        <h4>Bolivia Vs Argentina</h4>
                        <p>Amistoso por previo a las eliminatorias Rusia 2018</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-12">
                    <img class="brand-img img-responsive"  src="../images/logo.png" alt="">
                    <h2>Sistema de Venta de entradas</h2>
                    <h3>Estadio Hernando Siles</h3>
                </div>
                <div class="col-md-6 col-md-offset-1 col-lg-6 col-lg-offset-1 col-sm-12">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>Enlaces</h4>
                            <ul>
                                <li><a href="">Quienes Somos</a></li>
                                <li><a href="">Servicios</a></li>
                                <li><a href="">Ayuda</a></li>
                                <li><a href="">Contactos</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <h4>Ver más?</h4>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#registrarse">Registrarse</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>

@endsection