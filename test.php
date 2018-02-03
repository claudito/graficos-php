<?php 

include"autoload.php";

//var_dump(Reporte::forma_pago());

foreach (Reporte::forma_pago() as $key => $value) {
	
	echo $value['forma_pago']." ".$value['cantidad']."<br>";


}


 ?>