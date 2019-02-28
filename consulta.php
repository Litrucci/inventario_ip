<?php
include ('conexion.php');

if (isset ($_POST['funcionarioid'])){
		
	$funcionarioid = $_POST['funcionarioid'];		
			
		}else{
			
			$funcionarioid = "";
        }
        
if (isset ($_POST['nombre'])){
		
	$nombre = $_POST['nombre'];		
			
		}else{
			
			$nombre = "";
		}

if (isset ($_POST['apellido'])){
		
    $apellido = $_POST['apellido'];		
                    
        }else{
                    
            $apellido = "";
        }

if (isset ($_POST['combo_ip'])){
		
    $combo_ip = $_POST['combo_ip'];		
                            
        }else{
                            
            $combo_ip = "";
        }

        
$sql = "INSERT INTO funcionario (nombre, apellido, listado_ip_id) 
VALUES('$nombre', '$apellido', '$combo_ip')"; 
//print_r($sql);

$resultado2 = mysqli_query($conexion, $sql);

$ultimoid = mysqli_insert_id($conexion);
print_r($ultimoid);

$sql2 = mysqli_query($conexion,"UPDATE listado_ip SET funcionario_id= $ultimoid WHERE id =".$combo_ip);
//print_r($sql2);


$resultado = mysqli_query($conexion, ("SELECT * FROM listado_ip WHERE funcionario_id is NULL" ));


//Si la variable es distinta a vacia se ejecuta las consulta
if (!empty ($combo_ip)&& !empty($funcionarioid))
{

    //Inserta Datos tabla busqueda
     $insert_busqueda = "INSERT INTO busqueda (listado_ip_id, funcionario_id) VALUES ('$combo_ip', '$funcionarioid')";
    //print_r($insert_busqueda);
     $resul_busqueda = mysqli_query($conexion, $insert_busqueda) or die ('error en el INSERT busqueda');

}

?>