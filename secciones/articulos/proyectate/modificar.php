<?php 

/* Connect To Database*/
require('../../../configuracion/config.php');
          
            
         
$fecha=date('Y-m-d H:i:s');






$sql1="UPDATE proyectate SET empresa='".$_POST['empresa']."',articulo='".$_POST['articulo']."',descripcion='".$_POST['detalle']."',contacto='".$_POST['contacto']."',fecha_creado='".$fecha."' WHERE id_proyectate='".$_POST['id_proyectate']."' ";

$articulo=mysqli_query($con,$sql1); 


echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
