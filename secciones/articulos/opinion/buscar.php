<?php
	
/* Connect To Database*/
require('../../../configuracion/config.php');
          
    $salida = "";

    $query = "SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM articulo INNER JOIN estatus_articulo ON articulo.fk_estatus = estatus_articulo.id_estatus_articulo where fk_seccion='4' order by id_articulo desc LIMIT 10";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM articulo INNER JOIN estatus_articulo ON articulo.fk_estatus = estatus_articulo.id_estatus_articulo WHERE titulo LIKE '%$q%' and fk_seccion='4' ";
    }

    $resultado = $con->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table class='table table-striped'>
    			<thead>
    				<tr id='titulo'>
    					 <th>
                          Título
                        </th>
                        <th>
                          Autor
                        </th>
                        <th>
                          Fecha
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
    					<td hidden>".$fila['id_articulo']."</td>
                        <td hidden>".$fila['fk_imagen']."</td>
    					<td>".$fila['titulo']."</td>
    					<td>".$fila['fk_autor']."</td>
    					<td>".$fila['fecha_creado']."</td>
    					<td>".$fila['estatus_articulo']."</td>
                        <td>
                         <a href='editar.php?id=".$fila['id_articulo']."'  >
                         <button type='button' title='Editar Artículo' class='btn btn-gradient-primary btn-rounded btn-icon'>
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>

                       <a href='javascript:void(0);'  data-href='editar_imagen.php?id=".$fila['fk_imagen']."'  class='openPopup2'>
                         <button type='button' title='Editar Imágen' class='btn btn-gradient-info btn-rounded btn-icon'>
                          <i class='mdi mdi-file-image'></i>
                        </button>
                      </a>
                      <a href='javascript:void(0);'  data-href='ver.php?id=".$fila['id_articulo']."'  class='openPopup3'><button type='button' title='Ver' class='btn btn-gradient-danger btn-rounded btn-icon'>
                          <i class='mdi mdi-eye'></i>
                        </button></a>
                        <a href='javascript:void(0);'  data-href='pregunta.php?id=".$fila['id_articulo']."'  class='openPopup4'>
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
<!--MODAL PARA EDITAR IMÁGEN -->
<script>
  $(document).ready(function(){
    $('.openPopup2').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#editar_imagen').modal({show:true});

        });
    }); 
});

    $(document).ready(function(){
    $('.openPopup3').on('click',function(){
        var dataURL = $(this).attr('data-href');
        $('.modal-body').load(dataURL,function(){
            $('#ver').modal({show:true});
        });
    }); 
});
    $(document).ready(function(){
    $('.openPopup4').on('click',function(){
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
            
        </div>
      
    </div>
</div>




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