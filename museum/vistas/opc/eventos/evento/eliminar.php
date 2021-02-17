<?php
	include("conectar.php");
	$idevento= $_REQUEST['idevento'];

	$query= "DELETE FROM eventos WHERE idevento='$idevento'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>