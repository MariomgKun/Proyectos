<?php
	include("conectar.php");
	$idres= $_REQUEST['idres'];

	$query= "DELETE FROM reserva WHERE idres='$idres'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>