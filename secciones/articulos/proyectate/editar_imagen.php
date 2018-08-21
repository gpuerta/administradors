
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
                    $img=$resultado1['img'];

         ?>
         <script src="../../../js/tinymce/tinymce.min.js"></script>
           <script type="text/javascript" src="js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea" // change this value according to your HTML
 

 });
</script> 
        <form action="modificar_imagen.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Artículo de la imágen:</label>
                <input type="text" class="form-control" id="recipient-name" name="referencia" value="<?=$articulo?>" required>
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
            <input type="hidden" class="form-control" id="recipient-name" name="id_proyectate" value="<?=$id_proyectate?>" required>
            
              </div>
              <div class="modal-footer">
               
                <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onClick = "Ok();">
        </form>
                        
         <?php 

          }
        } 
             }
    ?>


<script src="../../../js/file-upload.js"></script>
  
