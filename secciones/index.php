<?php
session_start();
/* Connect To Database*/
require('../configuracion/config.php');

if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../index.php");
  }
  

?>
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
  <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * from persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
      WHERE usuario= '".$_SESSION["usuario"]."' ");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_persona=$resultado1['id_persona'];  
                    $nombres=$resultado1['nombres'];
                    $usuario=$resultado1['usuario'];
                    $tipo_usuario=$resultado1['tipo_usuario'];
                    $nombre_imagen=$resultado1['nombre_imagen'];
                    
                    

         ?>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="../images/logo/logo_mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../images/perfil/<?=$nombre_imagen?>" alt="image">
                <span class="availability-status online"></span>             
              </div>

              <div class="nav-profile-text">
                <p class="mb-1 text-white"><?=$nombres?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="perfil/index.php">
                <i class="mdi mdi-account-circle mr-2 text-success"></i>
                Perfil
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../clases/logout.php">
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
                <img src="../images/perfil/<?=$nombre_imagen?>" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Usuario: <?=$usuario?> </span>
                <span class="text-secondary text-small"><?=$tipo_usuario?></span>
              </div>
              
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
          <?php if($_SESSION['id_tipo_usuario']==1) { ?>
          <li class="nav-item">
            <a class="nav-link" href="usuarios/index.php">
              <span class="menu-title">Usuarios</span>
              <i class="mdi mdi-account-card-details menu-icon"></i>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- partial -->
       <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>                 
              </span>
              Inicio/Últimos artículos publicados
            </h3>
          </div>

          <!--MENSAJES NUEVOS -->

          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Tribu Urquia
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2' and fk_seccion='1' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h4 class="font-weight-normal mb-3">Ultravioleta
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                   <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2'and fk_seccion='2' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h4 class="font-weight-normal mb-3">Ni una Menos
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                                  <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2'and fk_seccion='6' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-primary card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Opinión Feminista
                    <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                                   <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2'and fk_seccion='4' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-warning card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                  
                  <h4 class="font-weight-normal mb-3">Nosotras en el Mundo
                    <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                                   <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2'and fk_seccion='5' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-dark card-img-holder text-white">
                <div class="card-body">
                  <img src="../images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>                                    
                  <h4 class="font-weight-normal mb-3">Proyectate
                    <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                                   <?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(fecha_creado,'%d-%m-%Y') AS fecha_creado FROM
articulo
where fk_estatus='2'and fk_seccion='3' ORDER BY id_articulo DESC limit 3");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   
                    $titulo=$resultado1['titulo'];
                    $fecha_creado=$resultado1['fecha_creado'];
                    

         ?>

          <ul>
            <li><?=$titulo?> (<?=$fecha_creado?>)</li>
          </ul>


         <?php 

          }
        } 
             
    ?>
                </div>
              </div>
            </div>
          </div>

  
      








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
 <?php 

          }
        } 
             
    ?>
</html>
