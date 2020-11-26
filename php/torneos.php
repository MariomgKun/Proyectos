<!DOCTYPE html>
<html>
<head>
	<title>Torneos</title>
	<link rel="stylesheet" href="../css/semantic.min.css">
	<link rel="stylesheet" href="../css/semantic.css">
	<link rel="stylesheet" href="../css/torneo.css">
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
        <!--Lista de partidas-->
        <div class="contPortada">
            <div class="ui black four item inverted menu">
            <a class="item" href="juegos.php">Juegos</a>
				<a class="item" href="torneos.php">Torneos</a>
                <a class="item" href="clasificacion.php">Clasificaciones</a>
				<a class="item" href="perfil.php">Cuenta</a>
            </div>
        </div>

        <div class="conTorneo">
            <center><h1>Lista de Torneos</h1></center>
            <div class="ui middle aligned selection list">
                <div class="item">
                    <img class="ui avatar image" src="../img/ej2.jpg">
                    <div class="content">
                        <a class="header">Solo</a>
                        <div class="description">
                            <?php
                            include("Conexion.php");    
                            $modalidad="Solo";
                            $query = "SELECT * FROM torneo Where Modalidad =  '$modalidad'";
                            $resultado= $conexion->query($query);
                            if($resultado){
                                while ($row = mysqli_fetch_assoc($resultado)) {
                                    echo "<div class='description'>$row[NombreTorneo] <a href= 'Vertorneo.php?id=$row[idTorneo]'>registrarse</a></div>";
                                }
                            
                            }else{
                            echo "popo";
                            }

                            ?>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="../img/ej2.jpg">
                    <div class="content">
                        <a class="header">Duo</a>
                        <div class="description">Partida 2</div>
                    </div>
                </div>
                <div class="item">
                    <img class="ui avatar image" src="../img/ej2.jpg">
                    <div class="content">
                        <a class="header">Equipo</a>
                        <div class="description">Partida 3</div>
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