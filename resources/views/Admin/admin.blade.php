
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">Administrador</div>
                <div class="card-body">
                    <table class="table table-condensed table-striped">
                        <thead>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Domicilio</th>
                            <th>Celular</th>
                            <th>Genero</th>
                            <th>Estado civil</th>
                            <th>Curp</th>
                            <th>Pais</th>
                           
                        </thead>
                      <tbody>
                        @foreach ($aspirantes as $aspirante)
                          <tr>
                              <td>{{$aspirante->nombre}}</td>
                              <td>{{$aspirante->edad}}</td>
                              <td>{{$aspirante->domicilio}}</td>
                              <td>{{$aspirante->celular}}</td>
                              <td>{{$aspirante->genero}}</td>
                              <td>{{$aspirante->estado_civil}}</td>
                              <td>{{$aspirante->curp}}</td>
                              <td>{{$aspirante->pais}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
