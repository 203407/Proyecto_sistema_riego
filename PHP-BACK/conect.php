<?php

$db = new mysqli("localhost","root","carrera10","infosens");

if($db -> connect_errno){
//	echo "Fallo la conexion";
}else{
//	echo "Si se logro conectar";
}

return $db;

?>
