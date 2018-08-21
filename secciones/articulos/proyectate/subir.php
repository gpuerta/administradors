<?php 

/* Connect To Database*/
require('../../../configuracion/config.php');
          
            
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
          $destino =  "../../../images/articulo/proyectate/".$archivo;               
          //$destino =  "../../vuelo_index/imagen/carrusel/".$prefijo."_".$archivo; //ruta de la imagen original
          (copy($_FILES['img']['tmp_name'],$destino)) or die ("Error al subir la imagen ".$archivo); 
          //$status = "La imagen <b>".$archivo."</b> se a subido correctamente !"; 
           $post=$destino;     
            
            echo $status; 
$fecha=date('Y-m-d H:i:s');


$sql="INSERT INTO  proyectate (empresa,articulo,descripcion,contacto,ruta,img,fecha_creado) values('".$_POST['empresa']."','".$_POST['articulo']."','".$_POST['detalle']."','".$_POST['contacto']."','".$destino."','".$archivo."','".$fecha."') ";

$imagen=mysqli_query($con,$sql);


echo"<script type=\"text/javascript\">alert('Se ha guardado'); window.location='index.php';</script>";  


            
           }else{echo"<script type=\"text/javascript\">alert('solo jpg'); window.location='index.php';</script>";  
}      
       


?>
