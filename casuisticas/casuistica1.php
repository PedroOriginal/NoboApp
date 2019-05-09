<?php
include('../conexion.php');

session_start();
$varsesion = $_SESSION['usuario'];

if($varsesion == null || $varsesion = '') {
  echo "Usted no tiene autorizacion para ingresar al sistema. Por favor inicia sesion!";
  die();
}

 ?>


<!DOCTYPE html>
<html lang="es-MX">

<head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NoboApp</title>
  <link rel="shortcut icon" href="https://www.vectorlogo.es/wp-content/uploads/2018/03/logo-vector-gnp-seguros.jpg">

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Estilos para formulario step-->
<link rel="stylesheet" href="css/app.css" type="text/css">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NoboApp</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Inicio</span></a>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Administracion
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Paginas</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Manejo Personal:</h6>
            <a class="collapse-item" href="alta_usuario.php">Alta Usuario</a>
            <a class="collapse-item" href="modi_ususario.php">Modificar Usuario</a>
            <a class="collapse-item" href="eliminar_usuario.php">Eliminar Usuario</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Otras Paginas:</h6>
            <a class="collapse-item" href="404.php">404 Page</a>

          </div>
        </div>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Usuarios</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php echo $_SESSION['usuario'] ?>  <i class='fas fa-angle-down'></i></span>

              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>

          </div>

          <!-- tabla -->
          <div class="root">
          <form action="" class="form-register">
          <div class="form-register__header">
          <ul class="progressbar">
              <li style="color:white" class="progressbar__option active"> </li>
              <li style="color:white" class="progressbar__option"> </li>
              <li style="color:white" class="progressbar__option"> </li>
              <li style="color:white" class="progressbar__option"> </li>
              <li style="color:white" class="progressbar__option"> </li>
          </ul>
          <h1 class="form-register__title">Registro de casuistica </h1>
          </div>
          <div class="form-register__body">
          <div class="step active" id="step-1">
              <div class="step__header">
                  <h2 class="step__title">Información de cuenta<small>(Paso 1)</small></h2>
              </div>
              <div class="step__body">
                  <input type="email" placeholder="Correo" class="step__input">
                  <input type="password" placeholder="Contraseña" class="step__input">
                  <input type="password" placeholder="Confirmar contraseña" class="step__input">
              </div>
              <div class="step__footer">
                  <button type="button" class="btn btn-primary step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
              </div>
          </div>
          <div class="step" id="step-2">
              <div class="step__header">
                  <h2 class="step__title">Información de personal<small>(Paso 2)</small></h2>
              </div>
              <div class="step__body">
                  <input type="text" placeholder="Nombre" class="step__input">
                  <input type="text" placeholder="Apellido" class="step__input">
                  <input type="tel" placeholder="Teléfono" class="step__input">
                  <textarea rows="4" cols="80" placeholder="Dirección" class="step__input"></textarea>
              </div>
              <div class="step__footer">
                  <button type="button" class="btn btn-primary step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                  <button type="button" class="btn btn-primary step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
              </div>
          </div>
          <div class="step" id="step-3">
              <div class="step__header">
                  <h2 class="step__title">Información de personal<small>(Paso 2)</small></h2>
              </div>
              <div class="step__body">
                  <input type="text" placeholder="Nombre" class="step__input">
                  <input type="text" placeholder="Apellido" class="step__input">
                  <input type="tel" placeholder="Teléfono" class="step__input">
                  <textarea rows="4" cols="80" placeholder="Dirección" class="step__input"></textarea>
              </div>
              <div class="step__footer">
                  <button type="button" class="btn btn-primary step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                  <button type="button" class="btn btn-primary step__button step__button--next" data-to_step="4" data-step="3">Siguiente</button>
              </div>
          </div>
          <div class="step" id="step-4">
              <div class="step__header">
                  <h2 class="step__title">Información de personal<small>(Paso 2)</small></h2>
              </div>
              <div class="step__body">
                  <input type="text" placeholder="Nombre" class="step__input">
                  <input type="text" placeholder="Apellido" class="step__input">
                  <input type="tel" placeholder="Teléfono" class="step__input">
                  <textarea rows="4" cols="80" placeholder="Dirección" class="step__input"></textarea>
              </div>
              <div class="step__footer">
                  <button type="button" class="btn btn-primary step__button step__button--back" data-to_step="3" data-step="4">Regresar</button>
                  <button type="button" class="btn btn-primary step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button>
              </div>
          </div>
          <div class="step" id="step-5">
              <div class="step__header">
                  <h2 class="step__title">Información X<small>(Paso 3)</small></h2>
              </div>
              <div class="step__body">
                  <input type="text" placeholder="Dato x" class="step__input">
                  <input type="text" placeholder="Dato x" class="step__input">
                  <input type="text" placeholder="Dato x" class="step__input">
              </div>
              <div class="step__footer">
                  <button type="button" class="btn btn-primary step__button step__button--back" data-to_step="4" data-step="5">Regresar</button>
                  <button type="submit" class="btn btn-primary step__button">Registrarse</button>
              </div>
          </div>

          </form>
          </div>
          <script src="js/app.js"></script>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span> NoboApp</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal cerrar sesion-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Estas seguro de cerrar tu sesion?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="cerrar_sesion.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Logout Modal eliminar registro-->
  <div class="modal fade" id="confirme-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Estas seguro de eliminar el usuario?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Seleccione "Eliminar" a continuación si está seguro de eliminar el usuario.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
  <script>
  			$('#confirme-delete').on('show.bs.modal', function(e) {
  				$(this).find('.btn-primary').attr('href', $(e.relatedTarget).data('href'));

  				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-primary').attr('href') + '</strong>');
  			});
  		</script>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
