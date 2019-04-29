<?php

require 'conexion2.php';

        $USUARIO = $_POST['usuario'];
        $PARTIDO1 = $_POST['partido1'];
        $PARTIDO2 = $_POST['partido2'];
        $PARTIDO3 = $_POST['partido3'];
        $PARTIDO4 = $_POST['partido4'];
        $PARTIDO5 = $_POST['partido5'];
        $PARTIDO6 = $_POST['partido6'];
        $PARTIDO7 = $_POST['partido7'];
        $PARTIDO8 = $_POST['partido8'];
        $PARTIDO9 = $_POST['partido9'];


        $sql = "INSERT INTO pruebadb_nobo.quiniela (USUARIO, PARTIDO1, PARTIDO2, PARTIDO3, PARTIDO4, PARTIDO5, PARTIDO6, PARTIDO7, PARTIDO8, PARTIDO9)
                VALUES ('$USUARIO','$PARTIDO1','$PARTIDO2','$PARTIDO3','$PARTIDO4','$PARTIDO5','$PARTIDO6','$PARTIDO7','$PARTIDO8','$PARTIDO9')";

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
        <p>Tu quiniela a sido registrada correctamente</p>

      </div>
				<?php } else { ?>
          <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Cuidado!</h4>
      <p>Ah ocurrido algun error al momento de registrar tu quiniela</p>

    </div>
					<?php } ?>

					<a href="index.php" class="btn btn-primary">Regresar</a>

						</div>
	</body>
</html>
