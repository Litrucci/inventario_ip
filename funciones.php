<?php
include ('conexion.php');

$busqueda ="SELECT rut, nombre, apellido, ip
FROM funcionario
INNER JOIN busqueda ON funcionario.id = busqueda.funcionario_id 
JOIN listado_ip ON busqueda.listado_ip_id = listado_ip.id";

$resu_busqueda = mysqli_query ($conexion, $busqueda);
//print_r($resu_busqueda);
$i=0;
$tabla = "";
$array_temp=[];
$array_funcionario = [];

while($row = mysqli_fetch_array($resu_busqueda))
{
    $array_funcionario['rut'] = $row['rut'];
    $array_funcionario['nombre'] = utf8_encode($row['nombre']);
    $array_funcionario['apellido'] = utf8_encode($row['apellido']);
    $array_funcionario['ip'] = $row['ip'];
    
    array_push($array_temp,$array_funcionario);
   
}

    echo json_encode(["data"=>$array_temp]);

?>