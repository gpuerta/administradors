<?php
session_start();
/* Connect To Database*/
require('../../../configuracion/config.php');

if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../../../index.php");
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
  <link rel="stylesheet" href="../../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../../images/favicon.png" />

<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"> </script>
<script type="text/javascript">bkLib.onDomLoaded(function() { new
  nicEditor({buttonList : ['fontSize', 'bold', 'italic', 'underline','left','right','center','justify']}).panelInstance('cuerpo'); });
  </script>

  <script languaje="javascript">
  function Ok()
  {
  nicEditors.findEditor('cuerpo').saveContent();
  document.formname.submit();
  }
 </script>
<script type="text/javascript" src="../../../js/jquery.min.js"></script>
<script type="text/javascript" src="../../../js/main.js"></script>
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
        <a class="navbar-brand brand-logo" href="../../"><img src="../../../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../"><img src="../../../images/logo/logo_mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../../../images/perfil/<?=$nombre_imagen?>" alt="image">
                <span class="availability-status online"></span>             
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-white"><?=$nombres?></p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="../../perfil/index.php">
                <i class="mdi mdi-account-circle mr-2 text-success"></i>
                Perfil
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../../../clases/logout.php">
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
                <img src="../../../images/perfil/<?=$nombre_imagen?>" alt="profile">
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
                <span class="font-weight-bold mb-2">Usuario: <?=$usuario?></span>
                <span class="text-secondary text-small"><?=$tipo_usuario?></span>
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
                 <li class="nav-item"> <a class="nav-link" href="../tribu_urquia/index.php">
                  La Tribu de Urquia
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../ultravioleta/index.php">
                  Ultravioleta
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../defiendete/index.php">
                  Ni una Menos
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../opinion/index.php">
                  Opinión Feminista
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../proyectate/index.php">
                  Proyectate
                </a></li>
                 <li class="nav-item"> <a class="nav-link" href="../nosotras/index.php">
                  Nosotras en el Mundo
                </a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../../audiovisual/index.php">
              <span class="menu-title">Audiovisual</span>
              <i class="mdi mdi-video menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../biblioteca/index.php">
              <span class="menu-title">Bliblioteca</span>
              <i class="mdi mdi-library menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../hero/index.php">
              <span class="menu-title">Hero</span>
              <i class="mdi mdi-image-area menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../usuarios/index.php">
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
           <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                  <h2 class="">Listado de Artículos</h2>
                  <br>
                   <div class="btn-group pull-right">
        <button type='button' class="btn btn-gradient-success btn-sm btn-rounded btn-fw" data-toggle="modal" data-target="#nuevoarticulo"><span class="mdi mdi-plus-circle" ></span>Nuevo artículo</button>
      </div>
                 
      <!--BUSQUEDA DE ARTÍCULOS -->
        
            <div class="form-group row">
             
              <div class="col-md-5">
               <input type="text" class="form-control bg-transparent border-0" placeholder="Buscar" name="caja_busqueda" id="caja_busqueda"></input>
              </div>
              <div class="col-md-3">
             
                          <i class="mdi mdi-36px mdi-magnify text-danger"></i>
                        
              
                <span id="loader"></span>
              </div>
              
            </div>
      
      <!--DIV QUE CONTIENE LA TABLA DE ARTÍCULOS -->

    <div id="datos"></div>
   
                </div>
              </div>
            </div>
<!--MODAL PARA NUEVO ARTÍCULO -->

<div class="modal fade" id="nuevoarticulo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Nuevo Artículo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

 <form action="subir.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Título:</label>
            <input type="text" class="form-control" id="recipient-name" name="titulo" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estatus:</label>
              <select name="estatus" class="form-control">
                <option value="1">Privado</option>
                <option value="2">Publicado</option>
                <option value="3">Principal</option>
               
              </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Referencia de la imágen:</label>
            <input type="text" class="form-control" id="recipient-name" name="referencia" required>
          </div>
          <div class="form-group">
                      <label>Imágen del Artículo</label>
                      <input type="file" size="35"  name="img" class="file-upload-default" required>
                      <div class="input-group col-xs-12">
                        <input type="text"  class="form-control file-upload-info" disabled placeholder="Subir Imágen" >
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Subir</button>
                        </span>
                      </div>
                    </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Artículo:</label>
            <textarea class="form-control" style="width: 470px; height: 100px" id="cuerpo" name="detalle" required></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
       
        <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onClick = "Ok();">
      </form>
       
      </div>
    </div>
  </div>
</div>


        </div>
        <!-- content-wrapper ends -->
        <!-- Footer -->
       <?php 
        require('../../footer/footer.php');
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
  <script src="../../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../../js/off-canvas.js"></script>
  <script src="../../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../../js/dashboard.js"></script>
  <!-- End custom js for this page-->
  <!-- Custom js for this page-->
  <script src="../../../js/file-upload.js"></script>
  <!-- End custom js for this page-->
</body>
 <?php 

          }
        } 
             
    ?>
</html>


