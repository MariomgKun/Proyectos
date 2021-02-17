<?php
	include("conectar.php");
	$nombre= $_POST['nombre'];
	$username= $_POST['username'];
	$password= $_POST['password'];

	$query= "INSERT INTO usuario(nombre,username,password) VALUES('$nombre','$username','$password')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>