<!DOCTYPE html>
<html>
<head>
	<title>Clasificación</title>
	<link rel="stylesheet" href="../css/semantic.min.css">
	<link rel="stylesheet" href="../css/semantic.css">
	<link rel="stylesheet" href="../css/main.css">
	<link rel="stylesheet" href="../js/jquery-3.5.1.min.js">
	<link rel="stylesheet" href="../js/semantic.js">
    <link rel="stylesheet" href="../js/semantic.min.js">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
		integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
		crossorigin="anonymous"></script>
	<script src="../js/semantic.min.js"></script>
</head>
<body>
	<!--Menu superior-->
	<div class="ui menu">
		<a class="item" href="./principal.php">WolfBattles</a>
	</div>
	<?php 
		   include("Conexion.php");
		   session_start();
		   $aux= $_SESSION['Gamertag'];
		   echo "<a class='item' > $aux </a>"; 
		?>
	<div class="contForm">
        <div class="contPortada">
            <div class="ui black four item inverted menu">
			<a class="item" href="./juegos.php">Juegos</a>
				<a class="item" href="./torneos.php">Torneos</a>
                <a class="item" href="./clasificacion.php">Clasificaciones</a>
				<a class="item" href="./perfil.php">Cuenta</a>
			</div>
			
			<div class="contForm">
				<div class="sigInContainer">
					<div class="ui top attached tabular menu">
						<a class="item active"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
						  Clasificaciones
						</font></font></a>
					</div>
					
					<div class="ui bottom attached segment">
						<p></p>
						<?php
							$query = "SELECT idEquipo FROM perfil WHERE Gamertag = '$aux'"; 
							$result = mysqli_query($conexion, $query);
							$row = mysqli_fetch_assoc($result);
							$id = $row['idEquipo'];

							/*echo "<script type='text/javascript'>alert('$id');</script>";*/

							$query2 = "SELECT NombreEquip, TorneosInscritos, Puntajes FROM equipo WHERE idEquipo = '$id'"; 
							$resultado2 = $conexion->query($query2);

							if ($resultado2->num_rows > 0) {
								while($row = $resultado2->fetch_assoc()) {
								echo 
								'<div class="ui raised segments"><div class="ui segment"><p>Nombre del equipo: ' . $row["NombreEquip"].
								'</div><div class="ui segment"></p><p>Torneos Inscritos: ' . $row["TorneosInscritos"]. 
								'</div><div class="ui segment"></p><p>Puntajes:' . $row["Puntajes"]. '</p></div></div>';
								}
							} else {
								echo "0 results";
							}
						?>
					</div>
				</div>
			</div>
    	</div>
        
    </div>
	
	<footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>
</body>
</html>