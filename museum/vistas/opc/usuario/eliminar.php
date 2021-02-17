<?php
	include("conectar.php");
	$idusuario= $_REQUEST['idusuario'];

	$query= "DELETE FROM usuario WHERE idusuario='$idusuario'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>