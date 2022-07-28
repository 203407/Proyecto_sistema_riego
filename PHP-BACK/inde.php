<?php

include "./conect.php";


	$dhthume = $_POST['dhthume'];
	$dhttem = $_POST['dhttem'];
	$humetenedor = $_POST['humetenedor'];
	$temph2o = $_POST['temph2o'];

	$sql = "INSERT INTO  sensores (dht11_humedad, dht11_temperatura, humedad_suelo, temperatura_agua) VALUES ($dhthume ,$dhttem,$humetenedor,$temph2o)";

	if(mysqli_query($db,$sql)){
		echo "se insertaron los datos";
	}else{
		echo "error al insertar los datos";
	}


	if(mysqli_close($db)){
	        echo "Se cerro la conexion";
	}

?>
