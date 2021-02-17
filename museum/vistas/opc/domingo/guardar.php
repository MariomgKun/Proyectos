<?php
	include("conectar.php");
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$adulto= $_POST['adulto'];
	$menor= $_POST['menor'];

	$query= "INSERT INTO domingo (nombre,apellido,procedencia,adulto,menor) VALUES('$nombre','$apellido','$procedencia','$adulto','$menor')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>