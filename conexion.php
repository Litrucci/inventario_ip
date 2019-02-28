<?php 

	// Parametros a configurar para la conexion de la base de datos 
	$host = "localhost";    // sera el valor de nuestra BD 
	$basededatos = "ipes";    // sera el valor de nuestra BD 
	$usuariodb = "root";    // sera el valor de nuestra BD 
	$clavedb = "";    // sera el valor de nuestra BD 

	$conexion = new mysqli($host,$usuariodb,$clavedb,$basededatos);

//	if ($conexion->connect_errno) {
//	    echo "Nuestro sitio experimenta fallos....";
//	    
//	}
//else
//{
//    echo "conectado a BD";
//   echo "<br>";
//    echo "<br>";
//}
if (isset ($_GET['term'])){
		
	$string = $_GET['term'];		
			
		}else{
			
			$string = "";
		}

		$result = mysqli_query ($conexion, "SELECT * FROM funcionario where rut like '%$string%'");
	
		//$array = array();
		if ($result){
			$array = [];
			$array_respuesta=[];
			while ($row = mysqli_fetch_assoc($result)){
				$array['id'] =$row ['id'];
				$array['value'] =$row['rut'];
				$array['nombre_persona'] =$row ['nombre'];
				$array['apellido_persona'] =$row ['apellido'];
				array_push($array_respuesta, $array);	
			}
			echo json_encode($array_respuesta);
	
		}

?>