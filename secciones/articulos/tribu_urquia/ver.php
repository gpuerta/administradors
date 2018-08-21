<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../../configuracion/config.php');



		
		$queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM articulo 
			INNER JOIN estatus_articulo ON articulo.fk_estatus = estatus_articulo.id_estatus_articulo
			INNER JOIN imagen_articulo ON articulo.fk_imagen = imagen_articulo.id_imagen_articulo
			WHERE id_articulo= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_articulo=$resultado1['id_articulo'];  
                    $titulo=$resultado1['titulo'];
                    $fecha=$resultado1['fecha_creado'];
                    $autor=$resultado1['fk_autor'];
                    $detalle=$resultado1['detalle'];
                    $estatus=$resultado1['estatus_articulo'];
                    $ruta=$resultado1['ruta'];

         ?>
                    
                    <div align="center">
                            
                        <img class="img-responsive" src="<?=$ruta?>">
                             <br>
                        <strong> <?=$titulo?></strong>
                      
                    </div>
                        
                         <br> <br>
                         <?=$detalle?>
                         <br><br>
                         Autor: <?=$autor?> , Fecha: <?=$fecha?>
                        
         <?php 

					}
				} 
             }
		?>