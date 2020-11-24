<!DOCTYPE html>
<html>
<head>
    <title>Principal</title>
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
	<script src="js/semantic.min.js"></script>
</head>
<body>
	<!--Menu superior-->
	<div class="ui menu">	
        <a class="item" href="principal.html">WolfBattles</a>
        <?php
        session_start();
        $aux= $_SESSION['usuario'];
        echo "<a class='item' > $aux </a>"; 

        ?>
		<div class="right menu">
		  <a class="item" href="index.html">Salir</a>
		</div>
	</div>

    <div class="portada2">
        <br><br>
        <div class="contPortada">
            <div class="ui black four item inverted menu">
                <a class="item">Juegos</a>
                <a class="item">Torneos</a>
                <a class="item">Clasificaciones</a>
                <a class="item">Cuenta</a>
              </div>
        </div>
    </div>
    
    <br>
    <div class="contImg">
        <div class="ui medium images">
            <img src="../img/ej1.jpg">
            <img src="../img/ej1.jpg">
            <img src="../img/ej1.jpg">
        </div>
    </div>
    
    <footer id="main-footer">
        <p>WolfBattles&copy; 2020, Derechos reservados</p>
    </footer>

</body>
</html>