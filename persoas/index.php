<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';

$where = "";

if (!empty($_POST)) {
  $valor = $_POST['campo'];
  if (!empty($valor)) {
    $where = "WHERE id, nif LIKE '%" . $valor . "%'";
  }
}
$sql = "SELECT * FROM persoas $where";
$resultado = $mysqli->query($sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/index.css">
  <script src="../components/js/header.js"></script>
  <script src="../components/js/footer.js"></script>
  <title>Persoas</title>
</head>

<body>

  <!-- header -->
  <header-component></header-component>

 
  <div class="container mb-4">
    <div class="container mb-5">
      <div class="row">
        <h2 class="text-center mt-4 mb-3">Persoas</h2>

        <div class="col">
          <a href="functions/nuevo.php" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" fill="currentColor" class="bi bi-person-plus" viewBox="-3 1 18 18">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg></a>
        </div>
        <div class="col">
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group mb-3">
              <label class="w-50" for="campo"></label>
              <input type="text" class="form-control rounded-start" type="text" id="campo" name="campo">
              <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-primary rounded-end" />
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- TABLA -->

    <div class="row table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr class="table-primary">
            <th class="col-sm-1">ID</th>
            <th class="col-sm-1">Nombre</th>
            <th class="col-sm-3">Primeiro Apelido</th>
            <th class="col-sm-3">Segundo Apelido</th>
            <th class="col-sm-1">DNI/NIF</th>
            <th class="col-sm-3">Data de nacemento</th>
            <th class="col-sm-1">Sexo</th>
            <th class="col-sm-3">Código postal</th>
            <th class="col-sm-1">Teléfono</th>
            <th class="col-sm-2">Email</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['primeiro_apelido']; ?></td>
              <td><?php echo $row['segundo_apelido']; ?></td>
              <td><?php echo $row['nif']; ?></td>
              <td><?php echo $row['data_nacemento']; ?></td>
              <td><?php echo $row['sexo']; ?></td>
              <td><?php echo $row['codigo_postal']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td><a href="#"><i class="fa-solid fa-eye"></i></a></td>
              <td><a href="functions/modificar.php?id=<?php echo $row['id']; ?>"><i class="fas fa-pencil-alt"></i></a></td>
              <td><a href="functions/eliminar.php?id=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  
  <footer-component></footer-component> 
  
</body>

</html>