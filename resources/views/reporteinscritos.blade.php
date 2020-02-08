<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

        <style>
        table {
            padding: 50px;          
        }
        
        
        
        
        
        </style>
    </head>
    <body>
    <br>
    <h1 style="text-align: center">REPORTE DE ESTUDIANTES INSCRITOS.</h1>
    <div>
    <div class="row">
    <table class="table" style="text-align: center">
    @csrf
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Talla camiseta</th>
            </tr>
        </thead>
        <tbody>

        @foreach($inscritos as $item)
            <tr>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->telefono}}</td>
                <td>{{$item->edad}}</td>
                @if($item->sexo==1)
                <td>Femenino</td>
                @elseif($item->sexo==2)
                <td>Masculino</td>
                @endif
                @if($item->tallacamisa==1)
                <td>XS</td>
                @elseif($item->tallacamisa==2)
                <td>S</td>
                @elseif($item->tallacamisa==3)
                <td>M</td>
                @elseif($item->tallacamisa==4)
                <td>L</td>
                @elseif($item->tallacamisa==5)
                <td>XL</td>
                @elseif($item->tallacamisa==6)
                <td>XXL</td>
                @elseif($item->tallacamisa==0)
                <td>No Identificado</td>
                @endif    
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Talla camiseta</th>
            </tr>
        </tfoot>
        </table>
    </div>
    </div>
    </body>
</html>