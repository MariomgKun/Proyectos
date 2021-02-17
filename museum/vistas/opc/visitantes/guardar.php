<?php
	include("conectar.php");
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$profesor= $_POST['profesor'];
	$estudiantebas= $_POST['estudiantebas'];
	$estudiantesup= $_POST['estudiantesup'];
	$jubilado= $_POST['jubilado'];
	$discapacitado= $_POST['discapacitado'];
	$extranjero= $_POST['extranjero']
	$cuota= $_POST['cuota'];

	$query= "INSERT INTO visitante(nombre,apellido,procedencia,profesor,estudiantebas,estudiantesup,jubilado,discapacitado,extranjero,cuota) VALUES ('$nombre','$apellido','$procedencia','$profesor','$estudiantebas','$estudiantesup','$jubilado','$discapacitado','$extranjero','$cuota')";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>