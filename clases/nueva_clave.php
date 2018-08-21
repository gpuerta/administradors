
<?php
   session_start();
   require '../configuracion/config.php';
   if(isset($_SESSION['usuario'])){
  echo '<script> window.location="../secciones/index.php"; </script>';
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
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
  <script>
    function validar(){
   if (document.formulario.clave.value == document.formulario.clave2.value){
          document.formulario.submit();
   }else{
          alert('Las claves no son iguales');
   }
}
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="../images/logo/quinta_ola.png">
              </div>
             <?php
if(!empty($_POST['respuesta'])){

	/* Connect To Database*/
			
		$queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM persona
          INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
          INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
          INNER JOIN pregunta ON usuario.fk_pregunta = pregunta.id_pregunta
		  WHERE cedula= '".$_POST['cedula']."' and respuesta= '".$_POST['respuesta']."' ");

		             //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_usuario=$resultado1['id_usuario'];
                    $id_persona=$resultado1['id_persona'];   
                    $nombres=$resultado1['nombres'];
                    $cedula=$resultado1['cedula'];
                    $correo=$resultado1['correo'];
                    $telefono=$resultado1['telefono'];
                    $usuario=$resultado1['usuario'];
                    $tipo=$resultado1['fk_tipo_usuario'];
                    $tipo_usuario=$resultado1['tipo_usuario'];
                    $pregunta=$resultado1['pregunta'];
     
     ?>

              <form class="pt-3" action="cambio.php" method="post" name="formulario">
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="clave" placeholder="Nueva Clave">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputEmail1" name="clave2" placeholder="Repetir Clave">
                  <input type="hidden" class="form-control form-control-lg" id="exampleInputEmail1" name="cedula" value="<?=$id_usuario?>" readonly>
                </div>
                
                <div class="mt-3">
                 
                  <input type="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn btn-rounded btn-fw" name="login" value="ACEPTAR">
                </div>
                                        
              </form>
              
      <?php 

					}
				} else{

          echo"<script type=\"text/javascript\">alert('Error, respuesta incorrecta'); window.location='../index.php';</script>";  
        } 
             }
		?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <script src="vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/misc.js"></script>
  <!-- endinject -->
</body>

</html>

