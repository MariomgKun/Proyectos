<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIENVENIDO A DOMINGO!!</title>
    <link rel="shortcut icon" type="image/ico" href="assets/images/monflix.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <link id="estilo" rel="stylesheet" href="assets/css/estilos.css">
    <link id="estilo" rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav>
        <button class="switch" id="switch">
            <span><i class="fas fa-sun"></i></span>
            <span><i class="fas fa-moon"></i></span>
        </button>
    </nav>
    <div class="signInContainer">
        <div class="column">
            <div class="header">
                <img src="assets/images/logo.png" title="Logo" alt="Site logo" />
                <h3>INICIA SESION</h3>
                <span>Para continuar en DOMINGO!</span>
            </div>
            <form action="assets/php/login.php" method="POST">
                <input type="text" name="username" placeholder="username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" name="submitButton" value="Iniciar Sesión">
                <br>
            </form>
            <a href="assets/php/signup.php" class="signInMessage">¿Necesitas una cuenta? Registrate aqui!</a>
        </div>
    </div>
    <script src="assets/js/main.js"></script>
</body>

</html>