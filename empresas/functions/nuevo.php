<?php
require '../../conexion/conexion.php';
require '../../conexion/sesion.php';
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nova Empresa</title>
  <!-- esto no sirve no? -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- CND de bootstrap -> cambiar cuando toque -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- ESTILOS DE LAS PESTAÑAS Y SU CONTENIDO -> MODIFICAR CON BOOTSTRAP O LO QUE SEA -->
  <link rel="stylesheet" href="../../tabs.css">
  <script src="../../components/js/header.js"></script>
  <script src="../../components/js/footer.js"></script>
</head>

<body>

  <!-- header -->
  <header-component></header-component>

  <!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
  <h2 style="text-align:center">Prueba de lo que se abriría al clicar "Novo Rexistro" de Empresas</h2><br>

  <div class="t-container">

    <ul class="t-tabs">
      <li class="t-tab">Datos Empresa</li>
      <li class="t-tab">Seguimento</li>
      <li class="t-tab">Ofertas de Formación</li>
      <li class="t-tab">Ofertas de Contratación</li>
      <li class="t-tab"><a href="../../login/logout.php">Saír da sesión</a></li>
    </ul>

    <ul class="t-contents">

      <li class="t-content">
        <!-- <p>Contenido Datos</p> -->
        <h3 class="p-5 text-center">NOVA EMPRESA</h3>

        <form class="row g-3" method="POST" action="guardar.php" autocomplete="off">
          <div class="col-md-4">
            <label for="nome" class="control-label">Nome:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nome" placeholder="Nome" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="ontrol-label">Localidade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="localidade" name="localidade" placeholder="Localidade..." required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="ontrol-label">Poboación:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="poboacion" name="poboacion" placeholder="Poboacion" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="actividade" class="control-label">Actividade:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="actividade" name="actividade" placeholder="Actividade" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Teléfono:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" maxlength="9" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="telefono" class="control-label">Fax:</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="fax" name="fax" placeholder="Número de Fax" maxlength="9">
            </div>
          </div>

          <div class="col-md-4">
            <label for="data_alta" class="control-label">Data de alta:</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="email" name="data_incorporacion" placeholder="dd-mm-aa" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="poboacion" class="ontrol-label">Persoa de Contacto</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="persoa_contacto" name="persoa_contacto" placeholder="" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="orientador" class="control-label">Orientador/a</label>
            <div class="col-sm-10">
              <select class="form-control" id="orientador" name="orientador">
                <option value="">Cea Rodríguez, Alberte</option>
                <option value="">García Barbosa, Eva</option>
                <option value="">De Monasterio Roldan, Celia</option>
              </select>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertas_emprego" class="control-label">Ofertas de Emprego:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_contratacion" placeholder="Ofertas emprego" required>
            </div>
          </div>

          <div class="col-md-4">
            <label for="ofertas_formacion" class="control-label">Ofertas de Formación:</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="email" name="ofertas_formacion" placeholder="Ofertas formacion" required>
            </div>
          </div>




          <div>
            <h4>RELACIÓN COA CONCELLERÍA</h4>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="asesoramiento_sae" value="option1">
              <label class="form-check-label" for="asesoramiento_sae">Asesoramiento SAE</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="axudas" value="option2">
              <label class="form-check-label" for="axudas">Axudas á contratación</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="concesionaria" value="option3">
              <label class="form-check-label" for="inlineCheckbox3">Concesionaria</label>
            </div>

          </div>

          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="desconocida" value="option1">
              <label class="form-check-label" for="desconocida">Descoñecida</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="formación" value="option2">
              <label class="form-check-label" for="formacion">Formación</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="mailing" value="option3">
              <label class="form-check-label" for="mailing">Mailing</label>
            </div>
          </div>

          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="oferta" value="option1">
              <label class="form-check-label" for="oferta">Oferta de emprego</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="practicas" value="option2">
              <label class="form-check-label" for="practicas">Prácticas</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="prospeccion" value="option3">
              <label class="form-check-label" for="prospeccion">Prospección</label>
            </div>
          </div>

          <div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="proveedor" value="option1">
              <label class="form-check-label" for="proveedor">Proveedor</label>
            </div>
            <div class="form-check form-check-inline col-2">
              <input class="form-check-input" type="checkbox" id="solicitude" value="option2">
              <label class="form-check-label" for="solicitude">Solicitude información</label>
            </div>

          </div>

          <div class="col-md-4">
            <div class="col-sm-offset-2 col-sm-10">
              <a href="../index.php" class="btn btn-default">Voltar</a>
              <button type="submit" class="btn btn-primary">Gardar</button>
            </div>
          </div>
        </form>

      </li>

      <li class="t-content" style="display:inline-block; height: 200px;">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">NOVO SEGUIMENTO</button>
          
      </li>


      <li class="t-content">
        <p>Non se encontraron Ofertas de Formación</p>
      </li>
      <li class="t-content">
        <p>Non se encontraron Ofertas de Contratación</p>
      </li>

    </ul>
  </div>

  <!-- footer -->
  <!-- <footer-component></footer-component> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <script src="../../tabs.js"></script>
  <script>
    myModal.hide();
  </script>

</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Comentarios:</p>
              <form action="">
                <textarea name="seguimento" id="seguimento" cols="30" rows="10"></textarea>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>

</html>