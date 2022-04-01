<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM persoas WHERE id = '$id'";
$ficha = $mysqli->query($sql);
$row = $ficha->fetch_array(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Ver rexistro</title>
</head>

<body>
<!--Header php-->
<?php
include_once '../inc/header.php';
?>

<!--Tabla datos-->
<main>
  <div class="container d-flex justify-content-center">
  <table class="table table-striped table-hover m-5">
    <thead>
    <tr>
      <th>REXISTRO DE PERSOA CON ID <?php echo $row['id']; ?></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <th>Nome e apelidos:</th>
      <td><?php echo $row['nome'], "&nbsp", $row['primeiro_apelido'], "&nbsp", $row['segundo_apelido'] ?></td>
    </tr>
    <tr>
      <th>DNI/NIF:</th>
      <td><?php echo $row['nif']; ?></td>
    </tr>
    <tr>
      <th>Data de nacemento:</th>
      <td><?php echo $row['data_nacemento']; ?></td>
    </tr>
    <tr>
      <th>Sexo:</th>
      <td> <?php echo $row['sexo']; ?></td>
    </tr>
    <tr>
      <th>Código Postal:</th>
      <td><?php echo $row['codigo_postal']; ?></td>
    </tr>
    <tr>
      <th>Teléfono:</th>
      <td><?php echo $row['telefono']; ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $row['email']; ?></td>
    </tr>
    </tbody>
  </table>
  </div>
</main>

<!--Footer php-->
<?php
include_once '../inc/footer.php';
?>
</body>
</html>
