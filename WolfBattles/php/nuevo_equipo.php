<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Equipo</title>
    <meta charset="UTF-8">  
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

    <br>
    <!--Formulario-->
    <div class="contForm">
        <div class="sigInContainer">
        <center><h1>Nuevo Equipo WolfBattles :v</h1></center><br>
            <div class="ui equal width form">
                <img class="ui small image" src="img/ej1.jpg">
                <span>Nombre jerarquia</span>

                <form name ="formularioNuevoEquipo" action= "nuevoEquipo.php" method="POST"> 

                    <div class="fields">
                        <div class="field">
                            <label>Nombre del equipo</label>
                            <input type="text" placeholder="Nombre del equipo" name="TeamName">
                        </div>
                    </div>

                <div class="fields">
                    <div class="field">
                        <label>ID Jugador 1</label>
                        <input type="text" placeholder="ID de Jugador" name="jugador1">
                    </div>
                    <div class="field">
                        <label>ID Jugador 2 </label>
                        <input type="text" placeholder="ID de Jugador" name="jugador2">
                    </div>
                </div>
                <div class="fields">
                    <div class="field">
                        <label>ID Jugador 3</label>
                        <input type="text" placeholder="ID de Jugador" name="jugador3">
                    </div>
                    <div class="field">
                        <label>ID Jugador 4 </label>
                        <input type="text" placeholder="ID de Jugador" name="jugador4">
                    </div>
                </div>   
            </div>
        
        <br>
        <button class="ui blue button" type="submit">Confirmar</button>
        </form>
        </div>
    </div>

    <footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>

</body>

</html>

