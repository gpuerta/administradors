<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE usuario SET fk_estatus_usuario='".$_POST['estatus_usuario']."' WHERE id_usuario='".$_POST['id_usuario']."' ";

$persona=mysqli_query($con,$sql1); 



echo"<script type=\"text/javascript\">alert('Ha cambiado de estatus'); window.location='index.php';</script>";  


            
           

?>
