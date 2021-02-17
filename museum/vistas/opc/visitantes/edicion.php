<?php
	include("conectar.php");
	$idvis= $_POST['idvis'];
	$nombre= $_POST['nombre'];
	$apellido= $_POST['apellido'];
	$procedencia= $_POST['procedencia'];
	$profesor= $_POST['profesor'];
	$estudiantebas= $_POST['estudiantebas'];
	$estudiantesup= $_POST['estudiantesup'];
	$jubilado= $_POST['jubilado'];
	$discapacitado= $_POST['discapacitado'];
	$extranjero= $_POST['extranjero'];
	$cuota= $_POST['cuota'];

	$query= "UPDATE visitante SET  nombre='$nombre', apellido='$apellido', procedencia='$procedencia', profesor='$profesor', estudiantebas='$estudiantebas', estudiantesup='$estudiantesup', jubilado='$jubilado', discapacitado='$discapacitado', extranjero='$extranjero', cuota='$cuota' WHERE idvis='$idvis'";
	$resultado= $conexion->query($query);
	if($resultado){
		echo "Exito";
		include_once 'ver.php';
	}else{
		echo "fracaso";
	}
?>