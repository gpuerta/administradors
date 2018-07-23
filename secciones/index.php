<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>La Quinta Ola</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/logo/logo_mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>                
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar">
            </div>
          </form>
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../images/faces/face1.jpg" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-white">Usuario Conectado</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-account-circle mr-2 text-success"></i>
                Perfil
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-logout mr-2 text-primary"></i>
                Cerrar Sesión
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="mdi mdi-format-line-spacing"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
                <img src="../images/faces/face1.jpg" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Usuario Conectado</span>
                <span class="text-secondary text-small">Administrador</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Artículos</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-comment-text-outline menu-icon"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="articulos/tribu_urquia/index.php">
                  La Tribu de Urquia
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="articulos/ultravioleta/index.php">
                  Ultravioleta
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="articulos/defiendete/index.php">
                  Ni una Menos
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="articulos/opinion/index.php">
                  Opinión Feminista
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="articulos/proyectate/index.php">
                  Proyectate
                </a></li>
                 <li class="nav-item"> <a class="nav-link" href="articulos/nosotras/index.php">
                  Nosotras en el Mundo
                </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="audiovisual/index.php">
              <span class="menu-title">Audiovisual</span>
              <i class="mdi mdi-video menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="biblioteca/index.php">
              <span class="menu-title">Bliblioteca</span>
              <i class="mdi mdi-library menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hero/index.php">
              <span class="menu-title">Hero</span>
              <i class="mdi mdi-image-area menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="usuarios/index.php">
              <span class="menu-title">Usuarios</span>
              <i class="mdi mdi-account-card-details menu-icon"></i>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
        </div>
        <!-- content-wrapper ends -->
        <!-- Footer -->
       <?php 
        require('footer/footer.php');
        ?>
        <!--Fin Footer -->
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="../vendors/js/vendor.bundle.base.js"></script>
  <script src="../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../js/off-canvas.js"></script>
  <script src="../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
