
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
                    $url=$resultado1['ruta'];
                    $fk_categoria=$resultado1['fk_categoria'];
                    $categoria=utf8_encode($resultado1['categoria']);
                    

         ?>

        <form action="modificar.php" method="post" enctype="multipart/form-data">
              <p class="card-description">
                      <b>Información del video</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Título</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="titulo" value="<?=$titulo?>" required/>
                             <input type="hidden" class="form-control" name="id_audiovisual" value="<?=$id_audiovisual?>" required/>
                              
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Resumen</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="referencia" value="<?=$referencia?>" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Categoría</label>
                          <div class="col-sm-9">

                            <?php 
                            /* Connect To Database*/
                           

          
                             $query = "SELECT * FROM categoria order by categoria ASC";
                             $resultado = $con->query($query);

                             ?>
                           <select class="form-control" name="categoria" required>
                              <option value="<?=$fk_categoria?>"><?=$categoria?></option>

                              <?php 
                              while ($fila = $resultado->fetch_assoc()) {

                               ?>
                              
                              <option value="<?=$fila['id_categoria']?>"><?=utf8_encode($fila['categoria'])?></option>

                             <?php 
                             }

                              ?> 
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">URL de YouTube</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" name="url"><?=$url?></textarea>
                          
                          </div>
                        </div>
                      </div>
                    </div>
      
                   <div class="modal-footer">
       
        <input type="submit" name="" value="Modificar"  class="btn btn-primary" onclick="validar()">
      </form>
       
      </div>
                </div>
              </div>

        </form>
                        
         <?php 

					}
				} 
             }
		?>


<script src="../../js/file-upload.js"></script>
  
