<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
    if (isset($_POST["titulo"])) {

      //Video
  $titulo=$_POST["titulo"];
  $resumen = $_POST["resumen"];
  $categoria = $_POST["categoria"];
  $url = $_POST["url"];
 
    
  
  // Comprobamos si la cedula ya existen
 $sql="select titulo from audiovisual where titulo='$titulo'";
    $comprobar = mysqli_query($con, $sql);
   $usuario_existe = mysqli_num_rows($comprobar);
      if ($usuario_existe>0) {
              echo " 
                <script language='JavaScript'> 
                alert('ya existe un video asociado al titulo');window.location='index.php'; 
                </script>";
       }else{
            // Comprobamos si la cuenta de correo ya existen
    $sql1="SELECT ruta FROM audiovisual WHERE ruta='$url'";
    $comprobar1 = mysqli_query($con, $sql1);
            
            $usuario_existe = mysqli_num_rows($comprobar1);
      if ($usuario_existe>0) {
                echo " 
                <script language='JavaScript'> 
                alert('ya existe el video'); window.location='index.php';
                </script>";
          
        }else{

               $sql="INSERT INTO  audiovisual (titulo,referencia,ruta,fk_categoria) values('".$titulo."','".$resumen."','".$url."','".$categoria."') ";

$audiovisual=mysqli_query($con,$sql);




echo"<script type=\"text/javascript\">alert('Se ha guardado'); window.location='index.php';</script>";  


            
           }
            



          
  }
}



       


?>
