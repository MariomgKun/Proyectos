<?php
	include("conectar.php");
	$iddom= $_REQUEST['iddom'];

	$query= "DELETE FROM domingo WHERE iddom='$iddom'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>