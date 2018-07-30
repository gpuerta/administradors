
<?php
if(!empty($_GET['id'])){

/* Connect To Database*/
require('../../configuracion/config.php');



    
    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM biblioteca
      WHERE id_libro= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_libro=$resultado1['id_libro'];
                    $titulo=$resultado1['titulo'];
                    $autor=$resultado1['autor'];
                    $url=$resultado1['url'];
                    $imagen=$resultado1['imagen'];
                    $fk_categoria=$resultado1['fk_categoria'];
                   
         ?>
 
        <form action="modificar_imagen.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Título del libro:</label>
                <input type="text" class="form-control" id="recipient-name" name="titulo" value="<?=$titulo?>" readonly>
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
            <input type="hidden" class="form-control" id="recipient-name" name="id_libro" value="<?=$id_libro?>" required>
            
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
  
