<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            
         
$fecha=date('Y-m-d H:i:s');






$sql1="UPDATE hero SET titulo='".$_POST['titulo']."',detalle='".$_POST['detalle']."',fecha_creado='".$fecha."',fk_estatus='".$_POST['estatus']."' WHERE id_hero='".$_POST['id_articulo']."' ";

$articulo=mysqli_query($con,$sql1); 


echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
