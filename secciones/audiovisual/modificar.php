<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            

$sql1="UPDATE audiovisual SET titulo='".$_POST['titulo']."',referencia='".$_POST['referencia']."',fk_categoria='".$_POST['categoria']."',ruta='".$_POST['url']."' WHERE id_audiovisual='".$_POST['id_audiovisual']."' ";

$persona=mysqli_query($con,$sql1); 



echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           

?>
