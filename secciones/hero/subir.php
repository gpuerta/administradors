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
          $destino =  "../../images/hero/".$archivo;               
          //$destino =  "../../vuelo_index/imagen/carrusel/".$prefijo."_".$archivo; //ruta de la imagen original
          (copy($_FILES['img']['tmp_name'],$destino)) or die ("Error al subir la imagen ".$archivo); 
          //$status = "La imagen <b>".$archivo."</b> se a subido correctamente !"; 
           $post=$destino;     
            
            echo $status; 
$fecha=date('Y-m-d H:i:s');


$sql="INSERT INTO  imagen_articulo (referencia,ruta,nombre_imagen) values('".$_POST['referencia']."','".$destino."','".$archivo."') ";

$imagen=mysqli_query($con,$sql);

$id=mysqli_insert_id($con);


$sql1="INSERT INTO  hero (titulo,detalle,fecha_creado,fk_imagen,fk_seccion,fk_autor,fk_estatus) values('".$_POST['titulo']."','".$_POST['detalle']."','".$fecha."',".$id.",'1','1','1') ";

$articulo=mysqli_query($con,$sql1); 


echo"<script type=\"text/javascript\">alert('Se ha guardado'); window.location='index.php';</script>";  


            
           }else{echo"<script type=\"text/javascript\">alert('solo jph'); window.location='index.php';</script>";  
}      
       


?>
