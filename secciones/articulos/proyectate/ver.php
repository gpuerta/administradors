<?php
if(!empty($_GET['id'])){

	/* Connect To Database*/
	require('../../../configuracion/config.php');



		
		$queryPrimeraTabla1 = mysqli_query($con,"SELECT *, DATE_FORMAT(DATE(fecha_creado), '%d-%m-%Y') as 'fecha_creado'  FROM proyectate  WHERE id_proyectate= '".$_GET['id']."' ");
     
     ?>

         <?php 
                    //comprobamos si se recupero alguna fila 
                    //mysql_num_rows() en caso de exito devuelve 1
        if( mysqli_num_rows($queryPrimeraTabla1) > 0 ){
            while( $resultado1 = mysqli_fetch_array($queryPrimeraTabla1) ){
                    $id_proyectate=$resultado1['id_proyectate'];  
                    $empresa=$resultado1['empresa'];
                    $fecha=$resultado1['fecha_creado'];
                    $articulo=$resultado1['articulo'];
                    $descripcion=$resultado1['descripcion'];
                    $contacto=$resultado1['contacto'];
                    $ruta=$resultado1['ruta'];

         ?>
                    
                    <div align="center">
                         	
                       	<img class="img-responsive" src="<?=$ruta?>">
                         <br>
                         <strong><?=$empresa?></strong>
                       		
                      
					</div>
                        
                         <br> <br>
                         <?=$descripcion?>
                         <br><br>
                         Contacto: <?=$contacto?> , Fecha: <?=$fecha?>
                        
         <?php 

					}
				} 
             }
		?>