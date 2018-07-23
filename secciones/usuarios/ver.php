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
                    
                  
                 <p class="card-description">
                      <b>Información Personal</b>
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Nombre y Apellido</label>
                          <div class="col-sm-9">
                             <?=$nombres?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Cédula</label>
                          <div class="col-sm-9">
                             <?=$cedula?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Correo</label>
                          <div class="col-sm-9">
                             <?=$correo?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Teléfono</label>
                          <div class="col-sm-9">
                             <?=$telefono?>
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
                             <?=$usuario?>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-4 col-form-label">Tipo de Usuario</label>
                          <div class="col-sm-9">
                              <?=$tipo_usuario?>
                          </div>
                        </div>
                      </div>
                    </div>
                           
                        
         <?php 

					}
				} 
             }
		?>