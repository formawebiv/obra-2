<?php
require './conexion/conexion.php';
require './conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta
?>

<!DOCTYPE html>
<html lang="gl">
<head>
  <title>Benvida ao SOL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/assets/css/index.css">
  <script src="../components/js/header.js"></script>
  <script src="../components/js/footer.js"></script>

</head>
<body>
<header-component></header-component>
<div class="container d-flex justify-content-center mt-lg-5">
  <div class="card bg-light">
  <h1 class="text-center text-white">Benvido/a ao Servizo de Orientación Laboral</h1>  
  <p class="card-body text-center mt-5 p-5 text-white">Está vostede na aplicación de xestión e rexistro de persoas e empresas do SOL.</p>
  </div>
  <div id="myCarousel" class="carousel slide w-75" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <a href="/persoas/index.php"><img src="https://images.pexels.com/photos/3184398/pexels-photo-3184398.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="persoas" style="width:600px; height:400px"></a>
        <p class="text-center">PERSOAS: REXISTRO, CONSULTA E MODIFICACIÓN</p>
      </div>

      <div class="item">
      <a href="/empresas/index.php"><img src="https://cflvdg.avoz.es/sc/4Ng_MzZTf05ButeQjg1iqDWX-ZQ=/768x/2021/07/20/00121626809823710451838/Foto/V09N6519.jpg" alt="Chicago" style="width:600px;height:400px"></a>
        <p class="text-center">EMPRESAS: REXISTRO, CONSULTA E MODIFICACIÓN</p>
      </div>
    
      <div class="item">
      <a href="/citas/index.php"><img src="https://images.pexels.com/photos/196650/pexels-photo-196650.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="New york" style="width:600px;height:400px"></a>
        <p class="text-center">CITAS: CREACIÓN E CONSULTA</p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<footer-component></footer-component>
</body>
</html>