
<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../../configuracion/config.php');



		
		  $queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM proyectate  WHERE id_proyectate= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                   $id_proyectate=$resultado1['id_proyectate'];  
                    $empresa=$resultado1['empresa'];
                    $fecha=$resultado1['fecha_creado'];
                    $articulo=$resultado1['articulo'];
                    $descripcion=$resultado1['descripcion'];
                    $contacto=$resultado1['contacto'];
                    $ruta=$resultado1['ruta'];

         ?>

        <form action="eliminar.php" method="post" enctype="multipart/form-data">
            ¿Desea eliminar esta publicación?
            <input type="hidden" class="form-control" id="recipient-name" name="id_proyectate" value="<?=$id_proyectate?>" required>
          
              </div>
       <br><br><br><br>
            
               <div class="pull-right"> 
                 
              
                <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onClick = "Ok();"> 
        </div>
        <div class="pull-left"> 
                 
              
              <a href="index.php"><input type="button" name="" value="Cancelar"  class="btn btn-primary" > </a>  
              
              </div>
        </form>
                        
         <?php 

					}
				} 
             }
		?>


<script src="../../../js/file-upload.js"></script>
  
