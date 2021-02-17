<?php
	include("conectar.php");
	$idusuario= $_REQUEST['idusuario'];
	$nombre= $_POST['nombre'];
	$username= $_POST['username'];
	$password= $_POST['password'];

	$query= "UPDATE usuario SET nombre='$nombre', username='$username', password='$password' WHERE idusuario='$idusuario'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>