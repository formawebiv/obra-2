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
<html lang="gl">

<head>
  <meta charset="UTF-8">
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
  <div class="  mt-4 mb-3 text-center d-flex justify-content-center">
        <h2 class="text-primary w-25">Persoas</h2>
        </div>
    <div class="container mb-5">
      <div class="row">
       
        <div class="col">
          <a href="functions/nuevo.php" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" fill="currentColor" class="bi bi-person-plus" viewBox="-3 1 18 18">
              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
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

    <div id="tabla" class="row table-responsive">
      <table  class="table table-striped table-hover">
        <thead>
          <tr class="table-primary">
            <th class="text-nowrap">Nome</th>
            <th class="text-nowrap">1º Apelido</th>
            <th class="text-nowrap">2º Apelido</th>
            <th class="text-nowrap">DNI/NIF</th>
            <th class="text-nowrap">Nacemento</th>
            <th class="text-nowrap">Sexo</th>
            <th class="text-nowrap">CP</th>
            <th class="text-nowrap">Teléfono</th>
            <th class="text-nowrap">Correo</th>
            <th class="text-nowrap">Accións</th>
          </tr>
        </thead>

        <tbody>
          <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <tr>
              <td><?php echo $row['nome']; ?></td>
              <td><?php echo $row['primeiro_apelido']; ?></td>
              <td><?php echo $row['segundo_apelido']; ?></td>
              <td><?php echo $row['nif']; ?></td>
              <td><?php echo $row['data_nacemento']; ?></td>
              <td><?php echo $row['sexo']; ?></td>
              <td><?php echo $row['codigo_postal']; ?></td>
              <td><?php echo $row['telefono']; ?></td>
              <td><?php echo $row['email']; ?></td>
              <td class="d-flex"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye " viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                  </svg></a>
                <a href="functions/modificar.php?id=<?php echo $row['id']; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil mx-2" viewBox="0 0 16 16">
                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                  </svg></a>
                <a href="functions/eliminar.php?id=<?php echo $row['id'] ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                  </svg></a>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer-component></footer-component>

</body>

</html>