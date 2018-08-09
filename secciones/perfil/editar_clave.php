
<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../configuracion/config.php');



		
		  $queryPrimeraTabla1 = mysqli_query($con,"SELECT * from persona
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
			WHERE id_usuario= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   $id_usuario=$resultado1['id_usuario'];  
                    $usuario=$resultado1['usuario'];
                    $tipo_usuario=$resultado1['tipo_usuario'];

         ?>


        <form action="modificar_clave.php" method="post" enctype="multipart/form-data" name="formulario">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Clave nueva:</label>
                <input type="password" class="form-control" id="recipient-name" name="clave"  required>
                <input type="hidden" class="form-control" id="recipient-name" name="id_usuario"  value="<?=$id_usuario?>">
              </div>
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Repetir clave:</label>
                <input type="password" class="form-control" id="recipient-name" name="clave2" required>
              </div>
            
              <div class="modal-footer">
               
               <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onclick="validar()">
        </form>
                        
         <?php 

					}
				} 
             }
		?>


<script src="../../js/file-upload.js"></script>
  
