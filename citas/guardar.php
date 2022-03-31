<?php

require '../conexion/conexion.php';
require '../conexion/sesion.php';

$data = $_POST['data'];
$nome = $_POST['nome'];
$horain = $_POST['horain'];
$horaout = $_POST['horaout'];

$sql = "INSERT INTO citas (data, nome, horain, horaout) VALUES ('$data','$nome','$horain','$horaout')";
$resultado = $mysqli->query($sql);

?>

<!DOCTYPE html>

<html>
<head>
  <title>Cita engadida</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="row" style="text-align:center">
        <?php if ($resultado) { ?>
          <h3>CITA GARDADA</h3>
        <?php } else { ?>
          <h3>ERRO AO GARDAR</h3>
        <?php } ?>

        <a href="../index.php" class="btn btn-primary">VOLTAR</a>

      </div>
    </div>
  </div>

</body>

</html>
