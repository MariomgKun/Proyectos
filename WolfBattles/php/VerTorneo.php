<!DOCTYPE html>
<html>
<head>
	<title>Torneo</title>
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
        <a class="item" href="principal.php">WolfBattles</a>
        <?php
        session_start();
        $aux= $_SESSION['Gamertag'];
        echo "<a class='item' > $aux </a>"; 
        ?>
		<div class="right menu">
		  <a class="item" href="logout.php">Salir</a>
		</div>
	</div>
    <?php
    include("Conexion.php");
    session_start();
    $aux= $_SESSION['usuario'];
    ?>

	<div class="contForm">
        <div class="contPortada">
            <div class="ui black four item inverted menu">
				<a class="item" href="torneos">Juegos</a>
				<a class="item" href="torneos.html">Torneos</a>
                <a class="item" href="clasificacion.html">Clasificaciones</a>
                <a class="item" href="perfil.html">Cuenta</a>
			</div>
			<div class="contForm">
				<div class="sigInContainer">
                <center>
                <img class="ui top aligned tiny image" src="../img/ej3.jpg">
                <br><span>Juego</span>
                <div class="ui divider"></div></center>
                    
                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>Participantes</th>
                            <th>Top 10</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="Name">Jugador1</td>
                            <td data-label="Age">Jugador1</td>
                        </tr>
                        <tr>
                            <td data-label="Name">Jugador2</td>
                            <td data-label="Age">Jugador2</td>
                        </tr>
                    </tbody>
                </table>

		        </div>
		    </div>
		</div>

    </div>

	<footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>
</body>
</html>