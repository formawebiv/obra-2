<?php
require 'conexion/conexion.php';
require 'conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>OBRA 2 SOL</title>
    
</head>
<body>

<h1>Welcome to SOL</h1>

<a href="login/logout.php">Saír da sesión</a>

    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/js/style.css"></script>

</body>
</html>

<!-- el código html de arriba es el del index que creamos con las dependencias + un h1 de prueba
y un enlace para salir (comprobar que funciona el logout) -->
