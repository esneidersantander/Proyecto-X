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
    <h1 style="text-align: center">REPORTE DE ORGANIZADORES</h1>
    <div>
    <div class="row">
    <table class="table" style="text-align: center">
    @csrf
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>

        @foreach($organizador as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nombre}}</td>
                <td>{{$item->apellido}}</td>
                <td>{{$item->email}}</td>
                <td><img src="images/organizadores/{{ $item ->imagen }}" alt=""class="img-thumbnail" width="120"></td>
        @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Foto</th>
            </tr>
        </tfoot>
        </table>
    </div>
    </div>
    </body>
</html>