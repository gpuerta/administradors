<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE persona SET nombres='".$_POST['nombres']."',cedula='".$_POST['cedula']."',correo='".$_POST['correo']."',telefono='".$_POST['telefono']."',fk_tipo_usuario='".$_POST['tipo_usuario']."' WHERE id_persona='".$_POST['id_persona']."' ";

$persona=mysqli_query($con,$sql1); 

$sql2="UPDATE usuario SET usuario='".$_POST['usuario']."' WHERE id_usuario='".$_POST['id_usuario']."' ";

$usuario=mysqli_query($con,$sql2); 


echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
