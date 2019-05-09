<?php

require 'conexion.php';

        $idusuario = $_GET['id_usuario'];

        $sql = "DELETE FROM prueba2_nobo.usuarios WHERE id_usuario='$idusuario'";

        $resultado = $mysqli->query($sql);
 ?>

 <html lang="es-MX">
	<head>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>

	<body>
    <?php echo date("m-d-Y H:i:s", $time); ?>
		<div class="container">

					<?php if($resultado) { ?>
            <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Correcto!</h4>
        <p>El usuario ha sido eliminado correctamente</p>

      </div>
				<?php } else { ?>
          <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Error!</h4>
      <p>Ah ocurrido algun error al momento de eliminar el usuario</p>

    </div>
					<?php } ?>

					<a href="usuarios.php" class="btn btn-primary">Regresar</a>

						</div>
	</body>
</html>
