<?php
	include("conectar.php");
	$idvis= $_REQUEST['idvis'];

	$query= "DELETE FROM visitante WHERE idvis='$idvis'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>