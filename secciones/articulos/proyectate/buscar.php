<?php
	
/* Connect To Database*/
require('../../../configuracion/config.php');
          
    $salida = "";

    $query = "SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM proyectate  order by id_proyectate desc LIMIT 10";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM proyectate WHERE empresa LIKE '%$q%' or articulo LIKE '%$q%' ";
    }

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='table table-striped'>
    			<thead>
    				<tr id='titulo'>
    					 <th>
                          Empresa
                        </th>
                        <th>
                          Artículo
                        </th>
                        <th>
                          Fecha
                        </th>
                        
                        <th>
                          Acciones
                        </th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
           
    		$salida.="<tr>
    					<td hidden>".$fila['id_proyectate']."</td>
    					<td>".$fila['empresa']."</td>
    					<td>".$fila['articulo']."</td>
    					<td>".$fila['fecha_creado']."</td>
    					
                        <td>
                         <a href='editar.php?id=".$fila['id_proyectate']."'>
                         <button type='button' title='Editar Artículo' class='btn btn-gradient-primary btn-rounded btn-icon'>
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>

                       <a href='javascript:void(0);'  data-href='editar_imagen.php?id=".$fila['id_proyectate']."'  class='openPopup1'>
                         <button type='button' title='Editar Imágen' class='btn btn-gradient-info btn-rounded btn-icon'>
                          <i class='mdi mdi-file-image'></i>
                        </button>
                      </a>
                      <a href='javascript:void(0);'  data-href='ver.php?id=".$fila['id_proyectate']."'  class='openPopup2'><button type='button' title='Ver' class='btn btn-gradient-danger btn-rounded btn-icon'>
                          <i class='mdi mdi-eye'></i>
                        </button></a>
                        <a href='javascript:void(0);'  data-href='pregunta.php?id=".$fila['id_proyectate']."'  class='openPopup3'>
                        <button type='button' title='Eliminar' class='btn btn-gradient-dark btn-rounded btn-icon'>
                          <i class='mdi mdi-delete-forever'></i>
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
    $('.openPopup1').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar_imagen').modal({show:true});

        });
    }); 
});


 $(document).ready(function(){
    $('.openPopup2').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#ver').modal({show:true});

        });
    }); 
});


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
<div class="modal fade" id="ver" role="dialog">
    <div class="modal-dialog modal-lg">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Artículo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" href="buscar_camion.php">Cerrar</button>
            </div>
        </div>
      
    </div>
</div>

<!--MODAL PARA EDITAR ARTÍCULO -->
<script>
 
</script>
<!-- Modal -->
<div class="modal fade" id="editar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar Artículo</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
          
        </div>
      
    </div>
</div>


<!--MODAL PARA EDITAR IMÁGEN -->
<script>
 
</script>
<!-- Modal -->
<div class="modal fade" id="editar_imagen" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar Imágen</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            
        </div>
      
    </div>
</div>


<!--MODAL PARA ELIMINAR -->
<script>
 
</script>
<!-- Modal -->
<div class="modal fade" id="eliminar" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Eliminar Publicación</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
            </div>
            <div class="modal-body">
        
            </div>
            
        </div>
      
    </div>
</div>
