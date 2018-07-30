<?php
if(!empty($_GET['id'])){

  /* Connect To Database*/
  require('../../configuracion/config.php');



    
    $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM biblioteca
      INNER JOIN categoria ON biblioteca.fk_categoria = categoria.id_categoria
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
                    $categoria=$resultado1['categoria'];
                    

         ?>
                    
                  
                 <p class="card-description">
                      <b>Información del Libro</b>
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
                          <label class="col-sm-4 col-form-label">Autor</label>
                          <div class="col-sm-9">
                             <?=$autor?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Categoría</label>
                          <div class="col-sm-9">
                             <?=$categoria?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Portada</label>
                          <div class="col-sm-9">
                              <img src="<?=$imagen?>">
                          </div>
                        </div>
                      </div>
                    </div>
                   
              
                           
                        
         <?php 

          }
        } 
             }
    ?>