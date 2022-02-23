<?php
require './conexion/conexion.php';
require './conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <script src="../components/js/header.js"></script>
        <title>OBRA 2 SOL</title>
</head>

<header-component></header-component>

<body >
  <h1>Welcome to SOL</h1>
  <br><br>

  <a href="persoas/index.php">Index Persoas</a><br>
  <a href="persoas/functions/nuevo.php">Novo Rexistro Persoas</a>

  <br><br>

  <a href="empresas/index.php">Index Empresas</a><br>
  <a href="empresas/functions/nuevo.php">Novo Rexistro Empresas</a>

  <br><br>

  <a href="login/logout.php">Saír da sesión</a>

</body>
</html>

<!-- el código html de arriba es el del index que creamos con las dependencias + un h1 de prueba
y un enlace para salir (comprobar que funciona el logout) -->
