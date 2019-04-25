<?php
require 'conexion.php';
$id = $_GET['id_usuario'];
$sql = "SELECT id_usuario, Usuario_Corto, Nombre, Apellidos, correo FROM prueba2_nobo.usuarios WHERE id_usuario='".$id."'";
$resultado = $mysqli->query($sql);

  while ($row = mysqli_fetch_assoc($resultado)) {

 ?>

<!DOCTYPE html>
<html lang="es-MX">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NoboApp</title>
  <link rel="shortcut icon" href="https://www.vectorlogo.es/wp-content/uploads/2018/03/logo-vector-gnp-seguros.jpg">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
  <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Modificar Usuario</h1>
              </div>
              <form method="POST" class="user" action="update.php">
                <div class="form-group">
                  <input type="hidden" class="form-control form-control-user"
                  id="id_usuario" name="id_usuario" placeholder="id Nombre"
                  value="<?php echo $row['id_usuario'] ?>">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user"
                  id="nombrecorto" name="nombrecorto" placeholder="Nombre Corto"
                  value="<?php echo $row['Usuario_Corto'] ?>">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"
                    id="nombre" name="nombre" placeholder="Nombre"
                    value="<?php echo $row['Nombre'] ?>">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user"
                    id="apellidos" name="apellidos" placeholder="Apellidos"
                    value="<?php echo $row['Apellidos'] ?>">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user"
                  id="email" name="email" placeholder="Email"
                  value="<?php echo $row['correo'] ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                    Actualizar
                </button>
              </form>
            <?php } ?>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
