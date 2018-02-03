<?php 
$usuario = array(
	"codigo"=>"0001",
	"nombres"=>"Juan",
	"apellidos"=>"Ponce",
    "edad"=>25,
    "talla"=>1.65
   );

$usuarios =  array(

array('codigo'=>'001','nombres'=>'juan'),
array('codigo'=>'002','nombres'=>'maria')

);
//var_dump($usuarios);
foreach ($usuarios as $key => $value) {
	
echo $value['codigo']." ".$value['nombres']."<br>";
}




//var_dump($usuario);

/*
foreach ($usuario as $key => $value) {
	  
	   echo $value."<br>";
}
*/

//echo $usuario['apellidos'];



 ?>