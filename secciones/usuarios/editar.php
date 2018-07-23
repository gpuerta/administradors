
<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../configuracion/config.php');



		
		  $queryPrimeraTabla1 = mysqli_query($con,"SELECT * FROM persona
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
                    $id_persona=$resultado1['id_persona'];   
                    $nombres=$resultado1['nombres'];
                    $cedula=$resultado1['cedula'];
                    $correo=$resultado1['correo'];
                    $telefono=$resultado1['telefono'];
                    $usuario=$resultado1['usuario'];
                    $tipo=$resultado1['fk_tipo_usuario'];
                    $tipo_usuario=$resultado1['tipo_usuario'];
                    

         ?>

        <form action="modificar.php" method="post" enctype="multipart/form-data">
              <p class="card-description">
                      <b>Información Personal</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nombre y Apellido</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombres" value="<?=$nombres?>" required/>
                             <input type="hidden" class="form-control" name="id_persona" value="<?=$id_persona?>" required/>
                              <input type="hidden" class="form-control" name="id_usuario" value="<?=$id_usuario?>" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Cédula</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="cedula" value="<?=$cedula?>" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Correo</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control" name="correo" value="<?=$correo?>" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Teléfono</label>
                          <div class="col-sm-9">
                            <input class="form-control" type="text" name="telefono" value="<?=$telefono?>" required/>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                    <p class="card-description">
                      <b>Usuario Web</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Usuario</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="usuario" value="<?=$usuario?>" required/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tipo de Usuario</label>
                          <div class="col-sm-9">
                             <select class="form-control" name="tipo_usuario" required>
                              <option value="<?=$tipo?>"><?=$tipo_usuario?></option>
                              <option value="1">Administrador</option>
                              <option value="2">Estandar</option>
                              
                            </select>
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
  
