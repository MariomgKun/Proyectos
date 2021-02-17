<?php
	include("conectar.php");
	$idevento= $_REQUEST['idevento'];
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$procedencia= $_POST['procedencia'];
	$email= $_POST['email'];
	$whats= $_POST['whats'];
	$tel= $_POST['tel'];
	$acom= $_POST['acom'];

	$query= "UPDATE eventos SET nombre='$nombre', apellidos='$apellidos', procedencia='$procedencia', email='$email', whats='$whats', tel='$tel', acom='$acom' WHERE idevento='$idevento'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>