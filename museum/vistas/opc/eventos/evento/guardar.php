<?php
	include("conectar.php");
	$ideventon= $_POST['ideventon'];
	$evento= $_POST['evento'];
	$nombre= $_POST['nombre'];
	$apellidos= $_POST['apellidos'];
	$procedencia= $_POST['procedencia'];
	$email= $_POST['email'];
	$whats= $_POST['whats'];
	$tel= $_POST['tel'];
	$acom= $_POST['acom'];

	$query= "INSERT INTO eventos(ideventon,evento,nombre,apellidos,procedencia,email,whats,tel,acom) 
	VALUES('$ideventon','$evento','$nombre','$apellidos','$procedencia','$email','$whats','$tel','$acom')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>