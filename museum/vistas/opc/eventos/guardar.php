<?php
	include("conectar.php");
	$eventon= $_POST['eventon'];

	$query= "INSERT INTO evento(eventon) VALUES('$eventon')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>