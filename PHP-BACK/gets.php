<?php

header('Access-Control-Allow-Origin: http://localhost:3000');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");



include "./conect.php";
//$db = new mysqli("localhost","root","carrera10","infosens");

//if($db -> connect_errno){
        //echo "Fallo la conexion";
//}else{
      //  echo "Si se logro conectar";



	$sql = "SELECT * FROM sensores";
	$resultado = mysqli_query($db,$sql);

	$row = mysqli_fetch_all($resultado);
	
	echo  json_encode($row);


	if(mysqli_close($db)){
//        echo "Se cerro la conexion";

	}
//}


?>
