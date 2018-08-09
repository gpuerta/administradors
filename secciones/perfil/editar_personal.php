
<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../configuracion/config.php');



		
		  $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM  persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
      WHERE id_persona= '".$_GET['id']."' ");
     
     ?>

         <?php 
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
         <script src="../../js/tinymce/tinymce.min.js"></script>
           <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea" // change this value according to your HTML
 

 });
</script> 
        <form action="modificar_personal.php" method="post" enctype="multipart/form-data">
             <div class="form-group">
                      <label for="exampleInputUsername1">Nombre y Apellido</label>
                      <input type="text" class="form-control" name="nombres" value="<?=$nombres?>">
                      <input type="hidden" class="form-control" name="id_persona" value="<?=$id_persona?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Correo</label>
                      <input type="email" class="form-control" name="correo" value="<?=$correo?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Cédula</label>
                      <input type="text" class="form-control" name="cedula" value="<?=$cedula?>">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Teléfono</label>
                      <input type="text" class="form-control" name="telefono" value="<?=$telefono?>">
                    </div>
                    
              <div class="modal-footer">
               
                <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onClick = "Ok();">
        </form>
                        
         <?php 

					}
				} 
             }
		?>


<script src="../../js/file-upload.js"></script>
  
