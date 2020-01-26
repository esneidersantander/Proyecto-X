<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

        <style>
        table {
          width: 100%;
          border-collapse: collapse;
          border-spacing: 0;
         
          margin:20px;
         }
        
        
        
        
        
        </style>
    </head>
    <body>
    <div class="container">
    <div class="row">
    <table id="ninscritos" class="table table-striped table-bordered" style="width:10%">
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
                <td>{{$item->sexo}}</td>
                <td>{{$item->tallacamisa}}</td>
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
    </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> -->
    <!-- <script>
       $(document).ready(function() {
            $('#ninscritos').DataTable();
       } );
    </script> -->
    </body>
</html>