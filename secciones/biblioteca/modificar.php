<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE biblioteca SET titulo='".$_POST['titulo']."',autor='".$_POST['autor']."',fk_categoria='".$_POST['categoria']."',url='".$_POST['url']."' WHERE id_libro='".$_POST['id_libro']."' ";

$persona=mysqli_query($con,$sql1); 



echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
