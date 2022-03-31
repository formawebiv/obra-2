<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Citas</title>
</head>
<body>

  <!--Menú-->
  <?php
  include_once '../inc/header.php';
  ?>

  <!--Main-->

  <div class="master-container my-4">

    <div class="container">
      <h2 class="text-primary w-25 mb-5">Axenda</h2>
      <div class="table-responsive d-flex justify-content-center">
        <?php
        $sql = "SELECT * FROM citas";
        $resultado = $mysqli->query($sql);

        if ($resultado->num_rows > 0) {
          echo "<table class='table table-striped table-hover'><tr class='table-primary'><th>Resolto</th><th>Data</th><th>Nome</th><th>Hora de comezo</th><th>Hora de saída</th></tr>";
          while ($row = $resultado->fetch_assoc()) {
            echo "<tr><td><input type='checkbox'></form><td>" . $row["data"] . "</td><td>" . $row["nome"] . "</td><td>" . $row["horain"] . "</td><td>" . $row["horaout"] . "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 resultados";
        }

        $mysqli->close();
        ?>
      </div>
      <div class="row d-flex justify-content-end mt-2">
        <a href="crear.php" class="btn btn-primary mb-4 w-25">Nova Cita</a>
      </div>

    </div>

  </div>
  <!--Footer -->
  <?php
  include_once '../inc/footer.php';
  ?>
</body>



</html>
