<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE usuario SET clave='".md5($_POST['clave'])."' WHERE id_usuario='".$_POST['id_usuario']."' ";

$persona=mysqli_query($con,$sql1); 



echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
