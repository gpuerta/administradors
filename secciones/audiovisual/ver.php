<?php
if(!empty($_GET['id'])){

  /* Connect To Database*/
  require('../../configuracion/config.php');



    
    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM audiovisual
      INNER JOIN categoria ON audiovisual.fk_categoria = categoria.id_categoria
      WHERE id_audiovisual= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_audiovisual=$resultado1['id_audiovisual'];
                    $titulo=$resultado1['titulo'];
                    $referencia=$resultado1['referencia'];
                    $ruta=$resultado1['ruta'];
                    $fk_categoria=$resultado1['fk_categoria'];
                    $categoria=$resultado1['categoria'];
                    

         ?>
                    
                  
                 <p class="card-description">
                      <b>Información del Video</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Título</label>
                          <div class="col-sm-9">
                             <?=$titulo?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Categoría</label>
                          <div class="col-sm-9">
                             <?=utf8_encode($categoria)?>
                          </div>
                        </div>
                      </div>
                    </div>
                     <p class="card-description">
                      <b>Video</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Título</label>
                          <div class="col-sm-9">
                            <?=$ruta?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Referencia</label>
                          <div class="col-sm-9">
                             <?=$referencia?>
                          </div>
                        </div>
                      </div>
                    </div>
                   
              
                           
                        
         <?php 

          }
        } 
             }
    ?>