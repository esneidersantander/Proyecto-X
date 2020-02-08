@auth
@extends('layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    </head>
    <body>
    <h1 style="text-align:center">ESTUDIANTES INSCRITOS</h1>
    <br>
    <div class="container">
    <div class="row">
    <table id="ninscritos" class="table table-striped table-bordered" style="width:100%">
    @csrf
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Talla camiceta</th>
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
                <th>Telefono</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Talla camiceta</th>
            </tr>
        </tfoot>
        </table>
        <a href="{{ url('reporteinscritos') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Generar Reporte</a>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#ninscritos').DataTable();
       } );
    </script>
    </body>
</html>

@endsection
@endauth