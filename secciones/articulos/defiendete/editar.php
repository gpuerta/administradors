<?php
session_start();
/* Connect To Database*/
require('../../../configuracion/config.php');

if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../../../");
  }
  

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <!-- Js para busqueda dinamica -->
  <script type="text/javascript" src="../../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../../js/main.js"></script>

  <script>
    function validar(){
   if (document.formulario.clave.value == document.formulario.clave2.value){
          document.formulario.submit();
   }else{
          alert('Las claves no son iguales');
   }
}
  </script>
  <!-- Js para editor de texto  -->
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
        <a class="navbar-brand brand-logo" href="../../../"><img src="../../../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../../"><img src="../../../images/logo/logo_mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          
        </div>
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
              <a class="dropdown-item" href="../../../perfil/">
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
           

                  <h2 class="">Editar Artículo</h2>
                  <br>
                   
                 

<?php
if(!empty($_GET['id'])){

  /* Connect To Database*/
 // require('../../../configuracion/config.php');



    
      $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM articulo 
      INNER JOIN estatus_articulo ON articulo.fk_estatus = estatus_articulo.id_estatus_articulo
      INNER JOIN imagen_articulo ON articulo.fk_imagen = imagen_articulo.id_imagen_articulo
      WHERE id_articulo= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                     $id_articulo=$resultado1['id_articulo'];
                    $id_imagen_articulo=$resultado1['id_imagen_articulo'];   
                    $titulo=$resultado1['titulo'];
                    $fecha=$resultado1['fecha_creado'];
                    $autor=$resultado1['fk_autor'];
                    $detalle=$resultado1['detalle'];
                    $estatus=$resultado1['estatus_articulo'];
                    $estatus_id=$resultado1['fk_estatus'];
                    $ruta=$resultado1['ruta'];
                    $referencia=$resultado1['referencia'];

         ?>
         
<script src="../../../editor/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript">
$('.textarea').wysihtml5();
</script> 
        <form action="modificar.php" method="post" enctype="multipart/form-data">
          <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Título</label>
                          <div class="col-sm-9">
                           <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?=$titulo?>" required>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Estatus</label>
                          <div class="col-sm-9">
                           <select name="estatus" class="form-control">
                              <option value="<?=$estatus_id?>"><?=$estatus?></option>
                              <option value="1">Privado</option>
                              <option value="2">Publicado</option>
                              <option value="3">Principal</option>   
                          </select>
                          </div>
                        </div>
                      </div>
                    </div>           
              <div class="form-group">
                <label for="message-text" class="col-form-label">Artículo:</label>
                 <textarea id="editor1" name="detalle" required  name="editor1" class="form-control" rows="10" cols="80">
                <?=$detalle?>
                  
                </textarea>
              </div>
            <input type="hidden" class="form-control" id="recipient-name" name="id_imagen_articulo" value="<?=$id_imagen_articulo?>" required>
            <input type="hidden" class="form-control" id="recipient-name" name="id_articulo" value="<?=$id_articulo?>" required>
              </div>
              <div class="modal-footer">
               
                 <div class="pull-right"> 
                  <a href="index.php"><input type="button" name="" value="Cancelar"  class="btn btn-primary" > </a>  
              
               
        </div>
        <div class="pull-left"> 
                 
               <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onClick = "Ok();"> 
             
              
              </div>
         </div>
        </form>      
         <?php 

          }
        } 
             }
    ?>

 
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
  <!-- Bootstrap WYSIHTML5 -->
  <!-- CK Editor -->
<script src="../../../editor/ckeditor/ckeditor.js"></script>
<script src="../../../editor/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>

<?php 

          }
        } 
             
    ?>


  
