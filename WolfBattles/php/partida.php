<!DOCTYPE html>
<html>
<head>
	<title>Partida</title>
	<link rel="stylesheet" href="../css/semantic.min.css">
	<link rel="stylesheet" href="../css/semantic.css">
	<link rel="stylesheet" href="../css/partida.css">
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
				<a class="item" href="juegos.php">Juegos</a>
				<a class="item" href="torneos.html">Torneos</a>
                <a class="item" href="clasificacion.html">Clasificaciones</a>
                <a class="item" href="perfil.html">Cuenta</a>
			</div>
			<div class="contForm">
				<div class="sigInContainer">
                    <!-- <div class="ui placeholder segment">
                        <div class="ui icon header">
                            <i class="file image icon"></i>
                            No documents are listed for this customer. 
                        </div>
                        <div class="ui primary button">Add Document</div>
                    </div> -->
                    <form name="MiForm" id="MiForm" method="post" action="cargar.php" enctype="multipart/form-data">
                        <h4 class="text-center"> Seleccione imagen a cargar </h4>
                        <div class="form-group">
                        <label class="col-sm-2 control-label"> Archivos </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" id="image" name="image" multiple>
                                <button name="submit" class="ui primary button">Cargar Imagen</button>
                            </div>
                        </div>
                    </form>

		        </div>
		    </div>
		</div>

    </div>

	<footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>
</body>
</html>