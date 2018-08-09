<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE persona SET nombres='".$_POST['nombres']."',cedula='".$_POST['cedula']."',correo='".$_POST['correo']."',telefono='".$_POST['telefono']."' WHERE id_persona='".$_POST['id_persona']."' ";

$persona=mysqli_query($con,$sql1); 



echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
