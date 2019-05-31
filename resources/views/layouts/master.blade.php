<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
  
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->    
        <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">   
        <link rel="stylesheet" href="{{asset('css/style.css')}}">  
        <style>
            .alert.alert-info{
                position: absolute;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 999;
            }
        </style>  
    </head>
    <body>
        
        <div class="wrap">
            @yield('back')
            @if(session('mensaje'))
              <div class="alert alert-info">{{session('mensaje')}}</div>
            @endif
            <div class="c_header">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="{{asset('img/este.png')}}" alt=""></a>
                        </div>
                    
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#new_aspirante">Register</a></li>
                            <li><a href="{{route('admin')}}">Administracion</a></li>
                            {{-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            </li> --}}
                        </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </div>
            <div class="wrap-image">
                @yield('banner')
            </div>
            <div class="wrap-title">
                @yield('content')
            </div>
        </div>
        
        <div class="modal fade" id="new_aspirante" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                <form action="{{url('aspirante')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Nuevo Aspirante</h4>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="nombre">Nombres</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombres" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="ap_paterno">Apellido Paterno</label>
                                <input type="text" name="ap_paterno" class="form-control" id="ap_paterno" placeholder="Apellido Paterno" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="ap_materno">Apellido Materno</label>
                                <input type="text" name="ap_materno" class="form-control" id="ap_materno" placeholder="Apellido Materno" required>
                            </div>
                        </div>

                        {{-- Apartir de aqui renombrar --}}
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="domicilio">Domicilio</label>
                                <input type="text" name="domicilio" class="form-control" id="domicilio" placeholder="Domicilio" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="colonia">Colonia</label>
                                <input type="text" name="colonia" class="form-control" id="colonia" placeholder="Colonia" required>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="cp">Codigo Postal</label>
                                <input type="text" class="form-control" name="cp" id="cp" placeholder="Codigo Postal" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                <input type="text" name="celular" class="form-control" id="celular" placeholder="celular" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="lugar_nac">Lugar Nacimiento</label>
                                <input type="text" name="lugar_nac" class="form-control" id="lugar_nac" placeholder="Lugar Nacimiento" required>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="fecha_nac">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" placeholder="Fecha de Nacimiento" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="pais">Pais</label>
                                <input type="text" name="pais" class="form-control" id="pais" placeholder="Pais" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <input type="text" name="genero" class="form-control" id="genero" placeholder="Genero" required>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="vives_con">Vives con</label>
                                <input type="text" class="form-control" name="vives_con" id="vives_con" placeholder="Vives con" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="estatura">Estatura</label>
                                <input type="text" name="estatura" class="form-control" id="estatura" placeholder="Estatura" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" class="form-control" id="peso" placeholder="Peso" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="estado_civil">Estado Civil</label>
                                <input type="text" name="estado_civil" class="form-control" id="estado_civil" placeholder="Estado Civil" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group">
                                <label for="curp">Curp</label>
                                <input type="text" name="curp" class="form-control" id="curp" placeholder="Curp" required>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Registrarme</button>
                    </div>
                </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <script src="{{asset('bootstrap/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>
