<?php 

class Reporte{



function forma_pago()
{

try {

$conexion = Conexion::get_conexion();
$query    = "SELECT forma_pago,count(forma_pago) cantidad FROM compras_cab
GROUP BY forma_pago ORDER BY cantidad desc limit 10;";
$statement = $conexion->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
return $result;

} catch (Exception $e) {
	
 echo "Error: ".$e->getMessage();

}



}




}




 ?>