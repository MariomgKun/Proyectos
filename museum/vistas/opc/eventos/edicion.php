<?php
	include("conectar.php");
	$ideventon= $_REQUEST['ideventon'];
	$eventon= $_POST['eventon'];

	$query= "UPDATE evento SET eventon='$eventon' WHERE ideventon='$ideventon'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>