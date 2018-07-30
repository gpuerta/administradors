
<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../configuracion/config.php');



		
		  $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM persona
      INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
      INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
      INNER JOIN estatus_usuario ON usuario.fk_estatus_usuario = estatus_usuario.id_estatus_usuario
			WHERE id_usuario= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
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
                    $id_estatus_usuario=$resultado1['fk_estatus_usuario'];
                    $estatus_usuario=$resultado1['estatus_usuario'];
                    

         ?>

        <form action="cambio_estatus.php" method="post" enctype="multipart/form-data">
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nombre y Apellido</label>
                          <div class="col-sm-9">
                           <?=$nombres?>
                            
                              <input type="hidden" class="form-control" name="id_usuario" value="<?=$id_usuario?>" required/>
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Estatus</label>
                          <div class="col-sm-9">
                             <select class="form-control" name="estatus_usuario" required>
                              <option value="<?=$id_estatus_usuario?>"><?=$estatus_usuario?></option>
                              <option value="1">Activo</option>
                              <option value="2">Inactivo</option>
                              
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                   
                   <div class="modal-footer">
       
        <input type="submit" name="" value="Aceptar"  class="btn btn-primary" onclick="validar()">
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
  
