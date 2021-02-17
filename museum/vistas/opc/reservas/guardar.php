<?php
	include("conectar.php");
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$numalumno= $_POST['numalumno'];
	$numprofesor= $_POST['numprofesor'];
	$fecha= $_POST['fecha'];

	$query= "INSERT INTO reserva(nombre,apellido,procedencia,numalumno,numprofesor,fecha) VALUES('$nombre','$apellido','$procedencia','$numalumno','$numprofesor','$fecha')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>