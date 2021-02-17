<?php
	include("conectar.php");
	$ideventon= $_REQUEST['ideventon'];

	$query= "DELETE FROM evento WHERE ideventon='$ideventon'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>