<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Styles -->       
    </head>
    <body>
        <div class="container">
            <h3>Lista de Aspirantes</h3>
            {{-- {{dd($aspirantes)}} --}}
            <table>
                <thead>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Domicilio</th>
                    <th>Colonia</th>
                    <th>Datos Familiares</th>
                </thead>
                <tbody>
                    @forelse($aspirantes as $aspirante)
                        <tr>
                            <td>{{$aspirante->nombre}}</td>
                            <td>{{$aspirante->ap_paterno}} {{$aspirante->ap_materno}}</td>
                            <td>{{$aspirante->edad}}</td>
                            <td>{{$aspirante->domicilio}}</td>
                            <td>{{$aspirante->colonia}}</td>
                            <td>
                                @forelse ($aspirante->families as $family)
                                    <li>{{$family->nombre_familiar}}</li>
                                @empty
                                    
                                @endforelse
                            </td>
                        </tr>
                    @empty
        
                    @endforelse
                </tbody>
            </table>
            
        </div>
    </body>
</html>
