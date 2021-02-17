<?php
	include("conectar.php");
	$idres= $_REQUEST['idres'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$numalumno= $_POST['numalumno'];
	$numprofesor= $_POST['numprofesor'];
	$fecha= $_POST['fecha'];

	$query= "UPDATE reserva SET nombre='$nombre', apellido='$apellido', procedencia='$procedencia', numalumno='$numalumno', numprofesor='$numprofesor', fecha='$fecha' WHERE idres='$idres'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>