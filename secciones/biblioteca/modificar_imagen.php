<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
          
            
          $status = ""; 
          //($_POST["action"] == "upload") or die ("Error al subir la imagen."); 
          $tamano = $_FILES["img"]['size']; 
          $tipo = $_FILES["img"]['type']; 
          $archivo = $_FILES["img"]['name']; 
         // $prefijo = substr(md5(uniqid(rand())),0,6);//generamos una id para poder tener imagenens repetidas  
 
         ($archivo != "") or die ("Error al subir la imagen ".$archivo); 
        
        //definimos la extension de la imagen            
        if($tipo == "image/jpeg" || $tipo == "image/jpg" or $tipo == "image/png" ) {

          //subimos la imagen original
          $destino =  "../../images/biblioteca/".$archivo;               
          //$destino =  "../../vuelo_index/imagen/carrusel/".$prefijo."_".$archivo; //ruta de la imagen original
          (copy($_FILES['img']['tmp_name'],$destino)) or die ("Error al subir la imagen ".$archivo); 
          //$status = "La imagen <b>".$archivo."</b> se a subido correctamente !"; 
           $post=$destino;     
            
            echo $status; 
//$fecha=date('Y-m-d H:i:s');


$sql="UPDATE  biblioteca SET imagen='".$destino."' WHERE id_libro='".$_POST['id_libro']."'";

$imagen=mysqli_query($con,$sql);




echo"<script type=\"text/javascript\">alert('Se ha editado'); window.location='index.php';</script>";  


            
           }else{echo"<script type=\"text/javascript\">alert('solo jph'); window.location='index.php';</script>";  
}      
       


?>
