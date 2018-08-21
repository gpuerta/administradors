<?php
session_start();
/* Connect To Database*/
require('../../configuracion/config.php');

if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../");
    

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
  <link rel="stylesheet" href="../../vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <!-- Js para busqueda dinamica -->
  <script type="text/javascript" src="../../js/jquery.min.js"></script>
  <script type="text/javascript" src="../../js/main.js"></script>

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
        <a class="navbar-brand brand-logo" href="../"><img src="../../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../"><img src="../../images/logo/logo_mini.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          
        </div>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../../images/perfil/<?=$nombre_imagen?>" alt="image">
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
                <img src="../../images/perfil/<?=$nombre_imagen?>" alt="profile">
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
                 <li class="nav-item"> <a class="nav-link" href="../articulos/tribu_urquia/">
                  La Tribu de Urquia
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../articulos/ultravioleta/">
                  Ultravioleta
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../articulos/defiendete/">
                  Ni una Menos
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../articulos/opinion/">
                  Opinión Feminista
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../articulos/proyectate/">
                  Proyectate
                </a></li>
                 <li class="nav-item"> <a class="nav-link" href="../articulos/nosotras/">
                  Nosotras en el Mundo
                </a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="../audiovisual/">
              <span class="menu-title">Audiovisual</span>
              <i class="mdi mdi-video menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../biblioteca/">
              <span class="menu-title">Bliblioteca</span>
              <i class="mdi mdi-library menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../hero/">
              <span class="menu-title">Hero</span>
              <i class="mdi mdi-image-area menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../usuarios/">
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

                  <h2 class="">Perfil</h2>
  

             <!--PERFIL PERSONA-->  
<?php


    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * from persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
      WHERE usuario= '".$_SESSION["usuario"]."' ");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_persona=$resultado1['id_persona'];  
                    $nombres=$resultado1['nombres'];
                    $cedula=$resultado1['cedula'];
                    $correo=$resultado1['correo'];
                    $telefono=$resultado1['telefono'];
                    

         ?>
             

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mis Datos  
                    <a href="javascript:void(0);"  data-href="editar_personal.php?id=<?php echo $id_persona;?>"  class="openPopup">
                         <button type='button' title='Editar Artículo' class='btn btn-gradient-primary btn-rounded btn-icon' >
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>
                    </h4>
                 
                    <div class="form-group">
                      Nombre y Apellido: <?=$nombres?>
                    </div>
                    <div class="form-group">
                   Correo: <?=$correo?>
                    </div>
                    <div class="form-group">
                      Cédula: <?=$cedula?>
                    </div>
                    <div class="form-group">
                   Teléfono: <?=$telefono?>
                    </div>
                    
                  
                   
                 
                </div>
              </div>
            </div>

 <?php 

          }
        } 
             
    ?>
             <!--PERFIL IMAGEN-->   
<?php
    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * from persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
      WHERE usuario= '".$_SESSION["usuario"]."' ");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_usuario=$resultado1['id_usuario'];  
                    $imagen_perfil=$resultado1['imagen_perfil']; 
                    
                    

         ?>
             

            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Imágen de Perfil
                     <a href="javascript:void(0);"  data-href="editar_imagen.php?id=<?php echo $id_usuario;?>"  class="openPopup2">
                         <button type="button" title="Editar imágen" class="btn btn-gradient-primary btn-rounded btn-icon" >
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>
                  </h4>
                    <img src="<?=$imagen_perfil?>">
                </div>
              </div>
            </div>
 <?php 

          }
        } 
             
    ?>

 <!--PERFIL USUARIO-->   
<?php
    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * from persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
      WHERE usuario= '".$_SESSION["usuario"]."' ");
      
    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_usuario=$resultado1['id_usuario'];  
                    $usuario=$resultado1['usuario'];
                    $tipo_usuario=$resultado1['tipo_usuario'];
                   

         ?>
<div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Mis Datos de Usuario/Cambiar claves
                      <a href="javascript:void(0);"  data-href="editar_clave.php?id=<?php echo $id_usuario;?>"  class="openPopup3">
                         <button type='button' title='Editar Artículo' class='btn btn-gradient-primary btn-rounded btn-icon' >
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>
                  </h4>
               
                    <div class="form-group">
                     Nombre de Usuario: <?=$usuario?>
                    </div>
                    <div class="form-group">
                    Tipo de usuario: <?=$tipo_usuario?>
                    </div>
     
                </div>
              </div>
            </div>

 <?php 

          }
        } 
             
    ?>




                 
            </div>  

            </div>
     
        <!-- content-wrapper ends -->
        <!-- Footer -->
       <?php 
        require('../footer/footer.php');
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <!-- End custom js for this page-->
   <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  

</body>

</html>

<script>
    //MODAL PARA EDITAR PERSONAL
  $(document).ready(function(){
    $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar').modal({show:true});
        });
    }); 
});

  //MODAL PARA IMAGEN
  $(document).ready(function(){
    $('.openPopup2').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar-imagen').modal({show:true});
        });
    }); 
});


    //MODAL PARA EDITAR CLAVE
  $(document).ready(function(){
    $('.openPopup3').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar-clave').modal({show:true});
        });
    }); 
});

</script>





<!--MODAL PARA EDITAR PERSONAL -->

<!-- Modal -->
<div class="modal fade" id="editar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar mi información personal</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            <div class="modal-footer">
               
            </div>
        </div>
      
    </div>
</div>



<!--MODAL PARA EDITAR IMAGEN -->

<!-- Modal -->
<div class="modal fade" id="editar-imagen" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Cambiar mi imágen de perfil</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
      
    </div>
</div>



<!--MODAL PARA EDITAR USUARIO -->

<!-- Modal -->
<div class="modal fade" id="editar-clave" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Cambiar mi clave</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
            
            </div>
        </div>
      
    </div>
</div>

 <?php 

          }
        } 
             
    ?>