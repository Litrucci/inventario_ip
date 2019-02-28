<?php

include ('conexion.php');
include ('consulta.php');


?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/estilo.css" >
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <title>Autocomplete</title>
  
  <script>
	 $(function() {  
 $( "#rut" ).autocomplete({
      source: "conexion.php",
      minLength: 1,
      
select: function( event, ui ) {
	 $( "#nombre" ).val( ui.item.nombre_persona );
	 $( "#apellido" ).val( ui.item.apellido_persona );
	 $( "#funcionarioid" ).val( ui.item.id );
	        
      }
 	 })
	 });

  </script>
  
</head>
<body>
 
  <!--- Input nombre/apellido  -->    
         <div class="login-page">
           <div class="form">
             <form class="login-form" action="index.php" method="post">
             
                    <div class="form-group">
                    <input class="form-control" type="text" name="rut" id="rut" placeholder="Rut:">
                    </div>

                    <input type="hidden" name="funcionarioid" id="funcionarioid">
                               
                    <div class="form-group">
                    <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre:">
                    </div>
                 
                    <div class="form-group">
                    <input id="apellido" class="form-control" type="text" name="apellido" placeholder="Apellido:"> 
                    </div>
                     
                     
                     <!---   Combo Select  -->                                             
          <div class="form-group">
            <select class="form-control" name="combo_ip" id="combo">
                <?php
                while($consulta = mysqli_fetch_assoc($resultado))
                { 
                ?>
                  <option value='<?php echo $consulta['id']  ?>' ><?php echo $consulta['ip']?></option>
                <?php 
                } 
                ?> 
            </select>
          </div>
               
                     
                           <!---  Botones Registrar y Buscar -->               
         <center>
          <button  type="submit" class="btn btn-success">Registrar</button>
           <a href="http://localhost/pruebas/ipes2/buscador.php" class="btn btn-success">Buscar</a>
            </center>
             <br>

 <!---  Validacion Nombre/Apellido --> 
        <div class="container">
         <div class="error bg-warning">
          <?php
           if(isset ($_POST ['nombre'])){
            $nombre = $_POST['nombre'];
             $apellido = $_POST ['apellido'];
              $campos = array();
               if($nombre == "") {
                array_push($campos, "ERROR: Ingrese Nombre <br>");
                 }
                  if($apellido == "") {
                   array_push($campos, "ERROR: Ingrese Apellido <br>");
                    }
                     if(count($campos) > 0){
                      for($i = 0; $i < count($campos); $i++){
                       echo$campos[$i];
                        }
                         }else{
                          echo"Datos Correctos";
                           }
                            }
                             ?>      
			</div>
				 </div>    
			   </form>                     

                     </div>
                     </div>
                    
			   
                     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>