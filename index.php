<?php
require 'conexion/conexion.php';
require 'conexion/sesion.php';
// este cacho de php tiene que ir SIEMPRE al inicio de los archivos de las páginas (a no ser que
// solo actúen como funciones y no haya front-end), y excepto aquí en el index deben ponerse los
// dos puntos y / antes del nombre de la carpeta (ver por ejemplo nuevo.php de persoas)
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OBRA 2 SOL</title>
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="../components/js/header.js"></script>
  <script src="../components/js/footer.js"></script>
  <link rel="stylesheet" href="/assets/css/index.css">

</head>

<body>
  <header-component></header-component>

  <!-- <h2 class="text-primary my-4 mx-5">Inicio</h2> -->

  <div class="container d-flex justify-content-center mt-5">
    <div class=" bg-primary rounded-start" style="max-width: 450px; height:350px">
      <h1 class="text-center text-white mt-4 ">Benvid@ ao Servizo de Orientación Laboral</h1>
      <p class="card-body text-center mt-5 text-white">Está vostede na aplicación de xestión e rexistro de persoas e empresas do SOL.</p>
    </div>
    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner rounded-end " style="max-width: 400px;">
        <div class="carousel-item active ">
          <a href="/persoas/index.php"><img src="./assets/img/PIXECT-20220208103824.jpg" alt="persoas" style=" height:285px"></a>
          <p class="text-center">PERSOAS: REXISTRO, CONSULTA E MODIFICACIÓN</p>

        </div>
        <div class="carousel-item ">
          <a href="/empresas/index.php"><img src="./assets/img/PIXECT-20220208103843.jpg" alt="Empresas" style="height:285px"></a>
          <p class="text-center">EMPRESAS: REXISTRO, CONSULTA E MODIFICACIÓN</p>

        </div>
        <div class="carousel-item  ">
          <a href="/citas/index.php"><img src="./assets/img/PIXECT-20220208103925.jpg" alt="Citas" style="height:300px"></a>
          <p class="text-center">CITAS: CREACIÓN E CONSULTA</p>

        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next rounded-end" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <footer-component></footer-component>
 

</body>

</html>