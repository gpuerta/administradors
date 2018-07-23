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

</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="../../index.php"><img src="../../../images/logo/quinta_ola.png" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../../images/logo/logo_mini.png" alt="logo"/></a>
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
                <img src="../../../images/faces/face1.jpg" alt="image">
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
                <img src="../../../images/faces/face1.jpg" alt="profile">
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
                 <li class="nav-item"> <a class="nav-link" href="../tribu_urquia/index.php">
                  La Tribu de Urquia
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../ultravioleta/index.php">
                  Ultravioleta
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../defiendete/index.php">
                  Defiéndete
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../opinion/index.php">
                  Opinión Feminista
                </a></li>
                <li class="nav-item"> <a class="nav-link" href="../flora/index.php">
                  Flora Tristán
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
                 
  <form class="form-horizontal" role="form" id="datos_cotizacion">
        
            <div class="form-group row">
             
              <div class="col-md-5">
                <input type="text" class="form-control form-control-sm" id="q" placeholder="Buscar por: título, autor" >
              </div>
              <div class="col-md-3">
                <button type="button" class="btn btn-outline-success btn-rounded btn-icon">
                          <i class="mdi mdi-magnify text-danger"></i>
                        </button>
              
                <span id="loader"></span>
              </div>
              
            </div>
        
        
        
      </form>
    
    <?php 
    require('../../../configuracion/config.php');
$queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM articulo INNER JOIN estatus_articulo ON articulo.fk_estatus = estatus_articulo.id_estatus_articulo
");
     
     ?>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>
                          Título
                        </th>
                        <th>
                          Autor
                        </th>
                        <th>
                          Fecha
                        </th>
                        <th>
                          Estatus
                        </th>
                        <th>
                          Acciones
                        </th>
                      </tr>
                    </thead>
                    <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
                    if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
                    while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_articulo=$resultado1['id_articulo'];  
                    $titulo=$resultado1['titulo'];
                    $fecha=$resultado1['fecha_creado'];
                    $autor=$resultado1['fk_autor'];
                    $estatus=$resultado1['estatus_articulo'];
                    $fk_imagen=$resultado1['fk_imagen'];


                     ?>
                    <tbody>
                      <tr>
                        <td class="py-1">
                         <?=$titulo?>
                        </td>
                        <td>
                         <?=$autor?>
                        </td>
                        <td>
                          <div>
                           <?=$fecha?>
                          </div>
                        </td>
                        <td>
                         <?=$estatus?>
                        </td>
                        <td>
                          <a href="javascript:void(0);"  data-href="editar.php?id=<?php echo $id_articulo;?>"  class="openPopup1">
                         <button type="button" title="Editar Artículo" class="btn btn-gradient-primary btn-rounded btn-icon">
                          <i class="mdi mdi-auto-fix"></i>
                        </button>
                      </a>
                       <a href="javascript:void(0);"  data-href="editar_imagen.php?id=<?php echo $fk_imagen;?>"  class="openPopup2">
                         <button type="button" title="Editar Imágen" class="btn btn-gradient-info btn-rounded btn-icon">
                          <i class="mdi mdi-file-image"></i>
                        </button>
                      </a>
                      
                        <a href="javascript:void(0);"  data-href="ver.php?id=<?php echo $id_articulo;?>"  class="openPopup"><button type="button" title="Ver" class="btn btn-gradient-danger btn-rounded btn-icon">
                          <i class="mdi mdi-eye"></i>
                        </button></a>
                       
                         <a href="javascript:void(0);"  data-href="pregunta.php?id=<?php echo $id_articulo;?>"  class="openPopup3">
                        <button type="button" title="Eliminar" class="btn btn-gradient-dark btn-rounded btn-icon">
                          <i class="mdi mdi-delete-forever"></i>
                        </button>
                      </a>
                        </td>
                      </tr>
                     
                    </tbody>
                    <?php 

}} 
                     ?>
                  </table>
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

</html>


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

<!--MODAL PARA VER ARTÍCULO -->
<script>
  $(document).ready(function(){
    $('.openPopup1').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#ver').modal({show:true});
        });
    }); 
});
</script>

<!-- Modal -->
<div class="modal fade" id="ver" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Artículo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" href="buscar_camion.php">Cerrar</button>
            </div>
        </div>
      
    </div>
</div>

<!--MODAL PARA EDITAR ARTÍCULO -->
<script>
  $(document).ready(function(){
    $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar').modal({show:true});

        });
    }); 
});
</script>
<!-- Modal -->
<div class="modal fade" id="editar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar Artículo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" href="buscar_camion.php">Cerrar</button>
            </div>
        </div>
      
    </div>
</div>


<!--MODAL PARA EDITAR IMÁGEN -->
<script>
  $(document).ready(function(){
    $('.openPopup2').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar_imagen').modal({show:true});

        });
    }); 
});
</script>
<!-- Modal -->
<div class="modal fade" id="editar_imagen" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar Imágen</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" href="buscar_camion.php">Cerrar</button>
            </div>
        </div>
      
    </div>
</div>


<!--MODAL PARA ELIMINAR -->
<script>
  $(document).ready(function(){
    $('.openPopup3').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#eliminar').modal({show:true});

        });
    }); 
});
</script>
<!-- Modal -->
<div class="modal fade" id="eliminar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            
        </div>
      
    </div>
</div>