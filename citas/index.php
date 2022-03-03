<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/css/index.css">
  <link rel="stylesheet" href="../citas/index.css">
  <script src="../components/js/header.js"></script>
  <script src="../components/js/footer.js"></script>

</head>

<body>

  <header-component></header-component>

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

  <script src="./index.js"></script>

  <footer-component></footer-component>
</body>



</html>