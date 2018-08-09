<?php
	
/* Connect To Database*/
require('../../configuracion/config.php');
          
    $salida = "";

    $query = "SELECT * FROM persona
    INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
    INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
    INNER JOIN estatus_usuario ON usuario.fk_estatus_usuario = estatus_usuario.id_estatus_usuario
     LIMIT 10";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM persona
    INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario
    INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
    INNER JOIN estatus_usuario ON usuario.fk_estatus_usuario = estatus_usuario.id_estatus_usuario
     WHERE cedula LIKE '%$q%' or nombres LIKE '%$q%' ";
    }

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='table table-striped'>
    			<thead>
    				<tr id='titulo'>
    					 <th>
                          Usuario
                        </th>
                        <th>
                          Cédula
                        </th>
                        <th>
                          Correo
                        </th>
                        <th>
                          Estatus
                        </th>
                        <th>
                          Acciones
                        </th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
           
    		$salida.="<tr>
    					<td hidden>".$fila['id_usuario']."</td>
                        <td hidden>".$fila['id_persona']."</td>
    					<td>".$fila['usuario']."</td>
    					<td>".$fila['cedula']."</td>
    					<td>".$fila['correo']."</td>
              <td>".$fila['estatus_usuario']."</td>
    					
                        <td>
                         <a href='javascript:void(0);'  data-href='editar.php?id=".$fila['id_usuario']."'  class='openPopup1'>
                         <button type='button' title='Editar Usuarios' class='btn btn-gradient-primary btn-rounded btn-icon'>
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>
                      <a href='javascript:void(0);'  data-href='ver.php?id=".$fila['id_usuario']."'  class='openPopup'><button type='button' title='Ver Usuario' class='btn btn-gradient-danger btn-rounded btn-icon'>
                          <i class='mdi mdi-eye'></i>
                        </button></a>
                        <a href='javascript:void(0);'  data-href='estatus.php?id=".$fila['id_usuario']."'  class='openPopup3'>
                        <button type='button' title='Estatus Usuario' class='btn btn-gradient-dark btn-rounded btn-icon'>
                          <i class='mdi mdi-account-switch'></i>
                        </button>
                      </a>
    

                        </td>
                        
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="No hay datos que mostrar";
    }


    echo $salida;

    $con->close();



?>



<!--MODAL PARA VER ARTÍCULO -->
<script>
  $(document).ready(function(){
    $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#ver').modal({show:true});
        });
    }); 
});
</script>

<!-- Modal -->
<div class="modal fade" id="ver" >
   <div class="modal-dialog modal-lg" role="document">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Ficha de Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              
            </div>
            
        </div>
      
    </div>
</div>


<!--MODAL PARA EDITAR USUARIO -->
<script>
  $(document).ready(function(){
    $('.openPopup1').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar').modal({show:true});

        });
    }); 
});
</script>
<!-- Modal -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            </div>
          
        </div>
    </div>
  </div>
</div>





<!--MODAL PARA ELIMINAR -->
<script>
  $(document).ready(function(){
    $('.openPopup3').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#eliminar').modal({show:true});

        });
    }); 
});
</script>
<!-- Modal -->
<div class="modal fade" id="eliminar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Estatus Usuario</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            
        </div>
      
    </div>
</div>
