<?php
	include("conectar.php");
	$iddom= $_REQUEST['iddom'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$adulto= $_POST['adulto'];
	$menor= $_POST['menor'];

	$query= "UPDATE domingo SET nombre='$nombre', apellido='$apellido', procedencia='$procedencia', adulto='$adulto', menor='$menor' WHERE iddom='$iddom'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>