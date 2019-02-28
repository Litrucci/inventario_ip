<?php
include 'conexion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- //<link rel="stylesheet" href="estilo.css"> -->
    
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<!-- DataTable JS -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script>
	  $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "asc" ]],
        "ajax": "funciones.php",
        "dataType":'json',
        "columns": [
            { "data": "rut" },
            { "data": "nombre" },
            { "data": "apellido" },
            { "data": "ip" }            
        ]
    } );
} );
     </script>
    
    
    <title>Inventario de IP</title>

</head>

  <body>

  <div class="container my-3">

  <p class="display-4 text-center">BUSQUEDA IP</p>
  <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead class="thead-dark" >
            <tr>
                <th>Run</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>IP</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tfoot class="thead-dark" >
        <tr>
                <th>Run</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>IP</th>
            </tr>
        </tfoot>
    </table>
    <a href="http://localhost/pruebas/ipes2/index.php" class="btn btn-primary" >Atras</a>
  </div>
  
</body>
</html>


