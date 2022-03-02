<?php

	require '../../conexion/conexion.php';
  require '../../conexion/sesion.php';

	$nome = $_POST['nome'];
	$poboacion = $_POST['poboacion'];
	$actividade = $_POST['actividade'];
	$data_incorporacion = $_POST['data_incorporacion'];
    $ofertas_contratacion = $_POST['ofertas_contratacion'];
    $ofertas_formacion = $_POST['ofertas_formacion'];

	$sql = "INSERT INTO empresas (nome, poboacion, actividade, data_incorporacion, ofertas_contratacion, ofertas_formacion) VALUES ('$nome', '$poboacion', '$actividade', '$data_incorporacion', '$ofertas_contratacion', '$ofertas_formacion')";
	$resultado = $mysqli->query($sql);

?>

<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REXISTRO GARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AO GARDAR</h3>
					<?php } ?>

					<a href="../index.php" class="btn btn-primary">Regresar</a>

				</div>
			</div>
		</div>
	</body>
</html>
