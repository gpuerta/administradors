<?php
	
/* Connect To Database*/
require('../../configuracion/config.php');
          
    $salida = "";

    $query = "SELECT * FROM biblioteca
     INNER JOIN categoria ON biblioteca.fk_categoria = categoria.id_categoria
     LIMIT 10";

    if (isset($_POST['consulta'])) {
    	$q = $con->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM biblioteca
     INNER JOIN categoria ON biblioteca.fk_categoria = categoria.id_categoria
     WHERE titulo LIKE '%$q%' or categoria LIKE '%$q%' ";
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
                          Categoría
                        </th>
                        
                        <th>
                          Acciones
                        </th>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
           
    		$salida.="<tr>
    					<td hidden>".$fila['id_libro']."</td>
                        <td hidden>".$fila['id_libro']."</td>
    					<td>".$fila['titulo']."</td>
    					<td>".$fila['autor']."</td>
    					<td>".$fila['categoria']."</td>
              
    					
                        <td>
                         <a href='javascript:void(0);'  data-href='editar.php?id=".$fila['id_libro']."'  class='openPopup1'>
                         <button type='button' title='Editar libro' class='btn btn-gradient-primary btn-rounded btn-icon'>
                          <i class='mdi mdi-auto-fix'></i>
                        </button>
                      </a>
                       <a href='javascript:void(0);'  data-href='editar_imagen.php?id=".$fila['id_libro']."'  class='openPopup2'>
                         <button type='button' title='Editar Portada' class='btn btn-gradient-info btn-rounded btn-icon'>
                          <i class='mdi mdi-file-image'></i>
                        </button>
                      </a>
                      <a href='javascript:void(0);'  data-href='ver.php?id=".$fila['id_libro']."'  class='openPopup'><button type='button' title='Ver Usuario' class='btn btn-gradient-danger btn-rounded btn-icon'>
                          <i class='mdi mdi-eye'></i>
                        </button></a>
                        <a href='javascript:void(0);'  data-href='estatus.php?id=".$fila['id_libro']."'  class='openPopup3'>
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



<!--MODAL PARA VER LIBRO -->
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
               <h3 class="modal-title" id="exampleModalLabel">Ficha del Libro</h3>
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


<!--MODAL PARA EDITAR LIBRO -->
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
        <h3 class="modal-title" id="exampleModalLabel">Modificar Publicación</h3>
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
</script>
<!-- Modal -->
<div class="modal fade" id="editar_imagen" role="dialog">
    <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title" id="exampleModalLabel">Editar Portada</h3>
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
