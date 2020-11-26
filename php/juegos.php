<!DOCTYPE html>
<html>
<head>
	<title>Juegos</title>
	<link rel="stylesheet" href="../css/semantic.min.css">
	<link rel="stylesheet" href="../css/semantic.css">
	<link rel="stylesheet" href="../css/perfil.css">
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
		<a class="item" href="index.html">WolfBattles</a>
	</div>

	<div class="contForm">
        <div class="contPortada">
            <div class="ui black four item inverted menu">
            <a class="item" href="juegos.php">Juegos</a>
				<a class="item" href="torneos.php">Torneos</a>
                <a class="item" href="clasificacion.php">Clasificaciones</a>
				<a class="item" href="perfil.php">Cuenta</a>
			</div>
			<!-- <div class="contForm">
				<div class="sigInContainer">
					
					
				</div>
			</div> -->

            <!-- Imagenes columna 1-->

            <?php

            //SELECT * FROM `juego` 
            include("Conexion.php");    

            $query = "SELECT * FROM juego";
            $resultado= $conexion->query($query);
            if($resultado){
                while ($row = mysqli_fetch_assoc($resultado)) {
                    echo " 
            <div class='ui five column grid'>
                    <div class='column'>
                        <div class='ui special cards'>
                            <div class='card'>
                                <div class='blurring dimmable image'>
                                    <div class='ui dimmer'>
                                        <div class='content'>
                                            <div class='center'>
                                                <p> $row[Informacion]</p>
                                            </div>
                                        </div>
                                    </div>
                                    <img src='../img/$row[Imagen]'>
                                </div>
                                <div class='content'>
                                    <a class='header' href='juego.php?id=$row[idJuego]. '> $row[NombreJuego]</a>
                                </div>
                            </div>
                        </div>
                    </div>
            ";
                }
            
            }else{
            echo "popo";
            }
             ?>



		</div>

    </div>


	
	<footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
	</footer>
</body>
<script>
    $('.special.cards .image').dimmer({on: 'hover'});
</script>
</html>