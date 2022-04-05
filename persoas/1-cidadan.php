<?php
require '../conexion/conexion.php';
require '../conexion/sesion.php';

require_once '../inc/header.php';

$id = $_GET['id'];

$sql = "SELECT * FROM persoas WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

?>

<div class="container">
  <h2 class=" mt-4 text-primary">Datos persoais: <span
      class="flex-md-wrap text-dark"> <?php echo $row['nome']; ?><?php echo $row['primeiro_apelido']; ?><?php echo $row['segundo_apelido']; ?></span>
  </h2>
</div>

<!-- ESTRUCTURA PARA TENER VARIAS PESTAÑAS DINÁMICAS EN UNA MISMA PÁGINA -->
<div class="t-container">
  <!-- Pestañas superiores -->
  <ul class="t-tabs">
    <li class="t-tab">Datos Personales</li>
    <li class="t-tab">Formación</li>
    <li class="t-tab">Experiencia</li>
    <!-- li class="t-tab">Acciones</li -->
    <li class="t-tab">Ofertas</li>
  </ul>

  <!-- Contenido de cada apartado -->
  <ul class="t-contents">
    <li class="t-content">
      <!-- form class="row g-3 mt-4" method="POST" action="update.php" autocomplete="off" -->
      <!-- Datos persoais -->
      <div class="container">
        <div class="row align-items-start my-3">
          <div class="col p-2 me-lg-4 bd-highlight text-start">
            <p id="id" class="visually-hidden"><?php echo $row['id']; ?></p>
            <p class="flex-md-wrap"><span class="opacity-50">NOME:</span> <?php echo $row['nome']; ?></p>
            <p class="flex-md-wrap"><span class="opacity-50">1º APELIDO:</span> <?php echo $row['primeiro_apelido']; ?>
            </p>
            <p class="flex-md-wrap"><span class="opacity-50">2º APELIDO:</span> <?php echo $row['segundo_apelido']; ?>
            </p>
          </div>

          <div class="col p-2 me-lg-4 bd-highlight text-start">
            <p class="text-nowrap"><span class="opacity-50">DNI/NIF:</span> <?php echo $row['nif']; ?></p>
            <p class="flex-md-wrap"><span class="opacity-50">DATA DE NACEMENTO:</span> <span
                class="text-nowrap"><?php echo $row['data_nacemento']; ?></span></p>
            <p class="text-nowrap"><span class="opacity-50">SEXO:</span> <?php echo $row['sexo']; ?> </p>
          </div>

          <div class="col p-2 me-lg-4 bd-highlight text-start">
            <p class="text-nowrap"><span class="opacity-50">TELÉFONO:</span> <?php echo $row['telefono']; ?></p>
            <p class="flex-md-nowrap"><span class="opacity-50">CORREO ELECTRÓNICO:</span> <?php echo $row['email']; ?>
            </p>
            <p class="text-nowrap"><span class="opacity-50">CP:</span> <?php echo $row['codigo_postal']; ?></p>
          </div>
        </div>

        <hr>
        <!-- *************************************************************  -->
        <div class="row align-items-start my-3">
          <p class="lead text-uppercase opacity-50">Accións</p>
          <div class="col">
            <p class="text-nowrap"><span
                class="opacity-50">DATA DA 1ª ENTREVISTA:</span> <?php // echo $row['data_p_cita']; ?>
            <p class="text-nowrap"><span
                class="opacity-50">ORIENTADOR/A:</span> <?php // echo $row['orientador_p_cita']; ?>
            <p class="text-nowrap"><span
                class="opacity-50">CANLE DE ACCESO:</span> <?php // echo $row['orientador_p_cita']; ?>
          </div>
          <div class="col">
            <p class="text-nowrap"><span class="opacity-50">SEGUIMENTO:</span> <?php // echo $row['orientador_p_cita']; ?>
            <p class="text-nowrap"><span
                class="opacity-50">ACCIÓNS DO SOL:</span> <?php // echo $row['orientador_p_cita']; ?>
            <p class="text-nowrap"><span
                class="opacity-50">NOTAS E CONSIDERACIÓNS</span> <?php // echo $row['orientador_p_cita']; ?>
          </div>
        </div>
        <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
      </div>
    </li>

    <li class="t-content">
      <!-- form class="row g-3 mt-4" method="POST" action="update.php" autocomplete="off" -->
      <!-- Formación -->
      <div class="col-md-4">
        <label for="estudo" class="control-label">ESTUDOS BÁSICOS:</label>
        <div class="col-md-10">
          <select class="form-control" id="estudos" name="estudos">
            <option value="text" disabled selected hidden>Formación Básica</option>
            <option value="ESO">E.S.O</option>
            <option value="COU">C.O.U</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="superiores" class="control-label">ESTUDOS SUPERIORES:</label>
        <div class="col-md-10">
          <select class="form-control" id="superiores" name="superiores">
            <option value="text" disabled selected hidden>Formación Superior</option>
            <option value="uni">Universitarios</option>
            <option value="nouni">Non Universitarios</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="universitarios" class="control-label">UNIVERSITARIOS:</label>
        <div class="col-md-10">
          <select class="form-control" id="universitarios" name="universitarios">
            <option value="text" disabled selected hidden>Estudos Universitarios</option>
            <option value="grao">Grao</option>
            <option value="master">Master</option>
            <option value="master">Doutorado</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="non-universitarios" class="control-label">NON UNIVERSITARIOS: </label>
        <div class="col-md-10">
          <select class="form-control" id="non-universitarios" name="nonuniversitarios">
            <option value="text" disabled selected hidden>Outros</option>
            <option value="bacharelato">Bacharelato</option>
            <option value="formacion-profesional">Formación Profesional</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="fp" class="control-label">FORMACIÓN PROFESIONAL:</label>
        <div class="col-md-10">
          <select class="form-control" id="formacion" name="formacion">
            <option value="text" disabled selected hidden>Formación Profesional</option>
            <option value="superior">Superior</option>
            <option value="media">Media</option>
            <option value="basica">Básica</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="familias" class="control-label">FAMILIAS PROFESIONAIS:</label>
        <div class="col-md-10">
          <select class="form-control" id="familias" name="familias">
            <option value="text" disabled selected hidden>Familias profesionais</option>
            <option value="informatica">Informática e comunicacións</option>
            <option value="admin">Administración e Xestión</option>
            <option value="madeira">Madeira, moble e corcho</option>
            <option value="auga">Enerxía e auga</option>
            <option value="imaxe">Imaxe persoal</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="complementaria" class="control-label">FORMACIÓN COMPLEMENTARIA:</label>
        <div class="col-md-10">
          <select class="form-control" id="complementaria" name="complementaria">
            <option value="text" disabled selected hidden>Formación Complementaria</option>
            <option value="certificados">Certificados Oficiais</option>
            <option value="curso">Curso Manipulador de Alimentos</option>
          </select>
        </div>
      </div>

      <div class="col-md-4">
        <label for="idiomas" class="control-label">IDIOMAS:</label>
        <div class="col-md-10"></div>
        <select class="form-control" id="idiomas" name="idiomas">
          <optgroup label="Niveis">
            <option value="text" disabled selected hidden>Niveis</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
          </optgroup>
        </select>

        <select class="form-control" id="idiomas" name="idiomas">
          <optgroup label="Curso">
            <option value="text" disabled selected hidden>Certificación</option>
            <option value="text">Cambridge</option>
            <option value="text">Oxford</option>
          </optgroup>
        </select>
      </div>

      <div class="col-md-4">
        <label for="otros" class="control-label">OUTROS:</label>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkbox1">
          <label class="form-check-label" for="defaultCheck">Viviu no estranxeiro</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="checkbox2">
          <label class="form-check-label" for="defaultCheck">Homologado</label>
          <!-- <label>Homologado</label> -->
          <!-- <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"> Si
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck2"> Non -->
        </div>

      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea">NOTAS E CONSIDERACIÓNS:</label>
        <textarea class="form-control" id="exampleFormControlTextarea" rows="3"></textarea>
      </div>

      <!-- div class="col-md-4">
        <div class=" my-4">
          <a href="index.php" class="btn btn-default">VOLVER</a>
          <button type="submit" class="btn btn-primary">GARDAR</button>
        </div>
      </div>
    </form -->
    </li>

    <!-- Experiencia -->
    <li class="t-content">
      <!-- form class="row g-3 mt-4" method="POST" action="update.php" autocomplete="off" -->
      <div class="col-md-4">
        <label for="ano_comezo" class="control-label">ANO DE COMEZO:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="ano_comezo" name="ano_comezo" placeholder="Ano de comezo"
                 maxlength="4" required>
        </div>
      </div>

      <div class="col-md-4">
        <label for="meses" class="control-label">DURACIÓN (en meses):</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Número de meses" id="meses" name="meses" required>
        </div>
      </div>

      <div class="col-md-4">
        <label for="posto" class="control-label">POSTO/CURSO:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" placeholder="Posto/curso" id="posto" name="posto" required>
        </div>
      </div>

      <!-- div class="col-md-4">
        <div class="my-4">
          <a href="index.php" class="btn btn-default">VOLVER</a>
          <button type="submit" class="btn btn-primary">GARDAR</button>
        </div>
      </div>
    </form -->
    </li>

    <!-- Accións
    <li class="t-content">
      <form class="row g-3 mt-4" method="POST" action="update.php" autocomplete="off">
        <div class="col-md-4">
          <label for="data_nacemento" class="control-label">DATA DA 1ª ENTREVISTA:</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="data_entrevista" name="data_entrevista" placeholder="dd-mm-aa" required>
          </div>
        </div>
        <div class="col-md-4">
          <label for="orientador" class="control-label">ORIENTADOR/A:</label>
          <div class="col-sm-10">
            <select class="form-control" id="orientador" name="orientador">
              <option value="">Cea Rodríguez, Alberte</option>
              <option value="">García Barbosa, Eva</option>
              <option value="">De Monasterio Roldan, Celia</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="canle" class="control-label">CANLE DE ACCESO:</label>
          <div class="col-sm-10">
            <select class="form-control" id="canle" name="canle">
              <option value="">Web</option>
              <option value="">Física</option>
              <option value="">Por contacto</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="canle" class="control-label">SEGUIMENTO:</label>
          <div class="col-sm-10">
            <select class="form-control" id="canle" name="canle">
              <option value="">Web</option>
              <option value="">Física</option>
              <option value="">Por contacto</option>
            </select>
          </div>
        </div>
        <div class="col-md-4">
          <label for="canle" class="control-label">ACCIÓNS DO SOL:</label>
          <div class="col-sm-10">
            <select class="form-control" id="canle" name="canle">
              <option value="">Web</option>
              <option value="">Física</option>
              <option value="">Por contacto</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleFormControlTextarea1">NOTAS E CONSIDERACIÓNS</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="col-md-4">
          <div class=" my-4">
            <a href="index.php" class="btn btn-default">VOLVER</a>
            <button type="submit" class="btn btn-primary">GARDAR</button>
          </div>
        </div>
      </form>

    </li>
-->
    <!-- Ofertas -->
    <li class="t-content">
      <form class="row g-3 mt-4" method="POST" action="update.php" autocomplete="off">
        <div class="col-md-4">
          <label for="ofertade" class="control-label">TIPO DE OFERTA:</label>
          <div class="col-sm-10">
            <select class="form-control" id="ofertade" name="ofertade">
              <option disabled selected>Elixe</option>
              <option value="contratacion">Contratación</option>
              <option value="formacion">Formación</option>
              <option value="axuda">Axuda á contratación</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <label for="ofertaemp" class="control-label">EMPRESA:</label>
          <div class="col-sm-10">
            <input type="text" placeholder="Empresa" class="form-control" id="ofertaemp" name="ofertaemp">
          </div>
        </div>

        <div class="col-md-4">
          <label for="ofertapost" class="control-label">POSTO:</label>
          <div class="col-sm-10">
            <input type="text" placeholder="Posto" class="form-control" id="ofertapost" name="ofertapost">
          </div>
        </div>

        <div class="col-md-4">
          <label for="ofertanum" class="control-label">Nº DE OFERTAS:</label>
          <div class="col-sm-10">
            <input type="tel" class="form-control" id="ofertanum" name="ofertanum">
          </div>
        </div>

        <div class="col-md-4">
          <label for="ofertadata" class="control-label">DATA DA OFERTA:</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="ofertadata" name="ofertadata">
          </div>
        </div>

        <div class="col-md-4">
          <label for="ofertadata" class="control-label">FIN DA OFERTA:</label>
          <div class="col-sm-10">
            <input type="date" class="form-control" id="ofertadata" name="ofertadata">
          </div>
        </div>


        <div class="container section">
          <div class="row">
            <div class="col-md-3">
              <!-- card #1 -->
              <div class="card">
                <!-- div class="col-md-6 card-image">
                  <img src="../assets/img/cidadan.jpg">
                </div>
                <div class="col-md-6 card-body" -->
                <h4 class="card-title">Card Title</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt</p>
                <a href="#" class="link-btn">Learn more</a>
                <!-- /div -->
              </div>
            </div>

          </div> <!-- class row end -->
        </div> <!-- class container end -->

        <!-- div class="col-md-4">
          <div class=" my-4">
            <a href="index.php" class="btn btn-default">VOLVER</a>
            <button type="submit" class="btn btn-primary">GARDAR</button>
          </div>
        </div! -->
      <!-- /form -->
    </li>

  </ul>
</div>


<!-- pé de paxina - footer -->
<?php include_once '../inc/footer.php' ?>

<script src="../assets/js/tabs.js"></script>

</body>
</html>
