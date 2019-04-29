<?php
require 'conexion.php';

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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Estilos para mapita-->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

    <link rel="stylesheet" href="css/style.css">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index-usu.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NoboApp</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index-usu.php">
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
        <a class="nav-link" href="">
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
            <h1 class="h3 mb-0 text-gray-800">Casuistica 1</h1>

          </div>

          <!-- tabla -->
          <div class="mmo-modal--tracking-intro mmo-state-01">

  <div class="mmo-illustration">
    <div class="mmo-illustration--rainbow">
      <svg class="hide" width="600px" height="180px" viewBox="0 0 600 180" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
        <rect id="path-1" x="0" y="0" width="600" height="190"></rect>
    </defs>
    <g id="desktop-intro" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Group-10" transform="translate(0.000000, -6.000000)">
            <mask id="mask-2" fill="white">
                <use xlink:href="#path-1"></use>
            </mask>
            <g id="Rectangle-5"></g>
            <g id="rainbow" opacity="0.9" mask="url(#mask-2)">
                <g transform="translate(-300.000000, 6.000000)">
                    <g>
                        <g id="Group">
                            <g id="Shape">
                                <g>
                                    <path d="M600,1116.74926 L600,1116.74926 C885.392734,1116.74926 1116.74926,885.392734 1116.74926,600 C1116.74926,314.607266 885.392734,83.2507433 600,83.2507433 C314.607266,83.2507433 83.2507433,314.607266 83.2507433,600 C83.2507433,885.392734 314.607266,1116.74926 600,1116.74926 L600,1116.74926 L600,1116.74926 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#F44336"></path>
                                    <path d="M600,1128.64222 L600,1128.64222 C891.961036,1128.64222 1128.64222,891.961036 1128.64222,600 C1128.64222,308.038964 891.961036,71.35778 600,71.35778 C308.038964,71.35778 71.35778,308.038964 71.35778,600 C71.35778,891.961036 308.038964,1128.64222 600,1128.64222 L600,1128.64222 L600,1128.64222 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#FF9800"></path>
                                    <path d="M600,1140.53518 L600,1140.53518 C898.529339,1140.53518 1140.53518,898.529339 1140.53518,600 C1140.53518,301.470661 898.529339,59.4648167 600,59.4648167 C301.470661,59.4648167 59.4648167,301.470661 59.4648167,600 C59.4648167,898.529339 301.470661,1140.53518 600,1140.53518 L600,1140.53518 L600,1140.53518 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#FFEB3B"></path>
                                    <path d="M600,1152.42815 L600,1152.42815 C905.09764,1152.42815 1152.42815,905.09764 1152.42815,600 C1152.42815,294.90236 905.09764,47.5718533 600,47.5718533 C294.90236,47.5718533 47.5718533,294.90236 47.5718533,600 C47.5718533,905.09764 294.90236,1152.42815 600,1152.42815 L600,1152.42815 L600,1152.42815 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#4CAF50"></path>
                                    <path d="M600,1164.32111 L600,1164.32111 C911.665943,1164.32111 1164.32111,911.665943 1164.32111,600 C1164.32111,288.334057 911.665943,35.67889 600,35.67889 C288.334057,35.67889 35.67889,288.334057 35.67889,600 C35.67889,911.665943 288.334057,1164.32111 600,1164.32111 L600,1164.32111 L600,1164.32111 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#3F51B5"></path>
                                    <path d="M600,1176.21407 L600,1176.21407 C918.234245,1176.21407 1176.21407,918.234245 1176.21407,600 C1176.21407,281.765755 918.234245,23.7859267 600,23.7859267 C281.765755,23.7859267 23.7859267,281.765755 23.7859267,600 C23.7859267,918.234245 281.765755,1176.21407 600,1176.21407 L600,1176.21407 L600,1176.21407 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#9C27B0"></path>
                                    <path d="M600,1188.10704 L600,1188.10704 C924.802548,1188.10704 1188.10704,924.802548 1188.10704,600 C1188.10704,275.197452 924.802548,11.8929633 600,11.8929633 C275.197452,11.8929633 11.8929633,275.197452 11.8929633,600 C11.8929633,924.802548 275.197452,1188.10704 600,1188.10704 L600,1188.10704 L600,1188.10704 Z M600,1200 L600,1200 C268.62915,1200 0,931.37085 0,600 C0,268.62915 268.62915,0 600,0 C931.37085,0 1200,268.62915 1200,600 C1200,931.37085 931.37085,1200 600,1200 L600,1200 L600,1200 Z" fill="#E91E63"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </g>
    </g>
</svg>
    </div>
    <div class="mmo-illustration--clouds"></div>
    <div class="mmo-illustration--background"></div>
    <div class="mmo-illustration--foreground"></div>
    <div class="mmo-illustration--shadow"></div>
    <div class="mmo-illustration--subhead"></div>
    <div class="mmo-illustration--head">Casuistica</div>
  </div>
  <div class="mmo-content">
    <div class="mmo-illustration-truck-container">
      <svg class="mmo-illustration--truck" width="87" height="72" viewBox="0 0 310.000000 163.000000"
 preserveAspectRatio="xMidYMid meet">

<g transform="translate(0.000000,163.000000) scale(0.100000,-0.100000)"
fill="#000000" stroke="none">
<path d="M1283 1581 c-109 -40 -186 -113 -236 -221 -17 -36 -38 -70 -46 -77
-13 -10 -14 -15 -3 -32 6 -12 12 -31 12 -44 0 -46 30 -124 64 -163 18 -22 58
-53 87 -68 30 -16 56 -31 58 -33 3 -2 -24 -34 -60 -71 -117 -120 -209 -241
-209 -274 0 -26 27 -22 91 12 l56 29 7 -82 c8 -96 31 -237 52 -320 l15 -58
-30 -31 c-37 -38 -45 -74 -20 -99 16 -16 34 -19 105 -19 47 0 94 5 105 10 30
17 25 68 -12 106 l-30 31 15 61 c9 33 16 69 16 80 0 26 18 32 95 32 77 0 95
-6 95 -32 0 -11 7 -47 15 -80 l16 -59 -31 -32 c-36 -37 -42 -90 -11 -107 11
-5 56 -10 101 -10 45 0 90 5 101 10 30 17 25 68 -12 106 -29 30 -30 33 -19 74
17 62 50 264 57 347 l6 72 52 -27 c44 -23 50 -30 42 -44 -8 -12 -7 -21 2 -32
17 -20 35 -20 51 0 12 13 20 9 64 -35 29 -28 59 -51 67 -51 9 0 24 -9 34 -20
25 -28 36 -25 75 15 35 36 34 49 -3 50 -16 0 -23 7 -25 25 -3 23 -126 160
-144 160 -4 0 -22 -13 -41 -29 l-33 -30 -18 30 c-26 44 -110 145 -184 221 -36
37 -64 69 -61 71 2 2 28 17 58 33 29 15 69 46 87 68 34 39 64 117 64 163 0 13
6 32 13 44 10 17 9 22 -4 32 -8 7 -29 42 -47 80 -39 84 -116 163 -197 202 -80
38 -221 46 -302 16z m107 -688 c0 -16 -7 -89 -15 -163 l-14 -135 22 -17 c28
-22 36 -22 65 0 l22 17 -15 135 c-20 180 -20 190 5 190 19 0 20 -7 20 -250 l0
-250 -65 0 -65 0 0 250 c0 243 1 250 20 250 15 0 20 -7 20 -27z"/>
</g>
</svg>
    </div>
    <div class="mmo-timeline">
      <div id="stop-01"></div>
      <div id="stop-02"></div>
      <div id="stop-03"></div>
      <div id="stop-04"></div>
      <div id="stop-05"><i class="material-icons">check</i></div>
    </div>
    <div class="mmo-messaging">
      <h1 id="headline-01">hola</h1>
      <p id="message-01">hola2</p>
      <h1 id="headline-02">hola3</h1>
      <p id="message-02">hola4</p>
    </div>
    <div class="mmo-button-group-container">
      <div class="mmo-button-group">
        <button id="btn-left" class="mmo-button-disabled"><i class="material-icons">chevron_left</i></button>
        <button id="btn-right"><i class="material-icons">chevron_right</i></button>
      </div>
    </div>
  </div>
</div>
  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>



    <script  src="js/index.js"></script>


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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
