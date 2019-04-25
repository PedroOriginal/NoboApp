<?php

require 'conexion.php';

        $idusuario = $_POST['id_usuario'];
        $nombrec = $_POST['nombrecorto'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $email = $_POST['email'];



        $sql = "UPDATE prueba2_nobo.usuarios SET Usuario_Corto='$nombrec',
        Nombre='$nombre', Apellidos='$apellidos', correo='$email'
        WHERE id_usuario='$idusuario'";

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
		<div class="container">

					<?php if($resultado) { ?>
            <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Correcto!</h4>
        <p>El usuario ha sido actualizado correctamente</p>

      </div>
				<?php } else { ?>
          <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Error!</h4>
      <p>Ah ocurrido algun error al momento de actualizar el usuario</p>

    </div>
					<?php } ?>

					<a href="usuarios.php" class="btn btn-primary">Regresar</a>

						</div>
	</body>
</html>
