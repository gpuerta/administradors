<?php 

/* Connect To Database*/
require('../../configuracion/config.php');
    if (isset($_POST["usuario"])) {

      //Personal
  $nombres=$_POST["nombres"];
  $cedula = $_POST["cedula"];
  $correo = $_POST["correo"];
  $telefono = $_POST["telefono"];
  $tipo= $_POST["tipo_usuario"];
      //Usuario web
  $usuario = $_POST["usuario"];
  $clave = md5($_POST["clave"]);
  $clave2 = md5($_POST["clave2"]);
  $pregunta = $_POST["pregunta"];
  $respuesta = $_POST["respuesta"];
  
  // Comprobamos si la cedula ya existen
 $sql="select cedula from persona where cedula='$cedula'";
    $comprobar = mysqli_query($con, $sql);
   $usuario_existe = mysqli_num_rows($comprobar);
      if ($usuario_existe>0) {
              echo " 
                <script language='JavaScript'> 
                alert('ya existe un usuario con la cédula');window.location='index.php'; 
                </script>";
       }else{
            // Comprobamos si la cuenta de correo ya existen
    $sql1="SELECT correo FROM persona WHERE correo='$correo'";
    $comprobar1 = mysqli_query($con, $sql1);
            
            $usuario_existe = mysqli_num_rows($comprobar1);
      if ($usuario_existe>0) {
                echo " 
                <script language='JavaScript'> 
                alert('ya existe un usuario con ese correo'); window.location='index.php';
                </script>";
          
        }else{

               $sql="INSERT INTO  usuario (usuario,clave,fk_pregunta,respuesta) values('".$usuario."','".$clave."','".$pregunta."','".$respuesta."') ";

$usuario=mysqli_query($con,$sql);

$id=mysqli_insert_id($con);


$sql1="INSERT INTO  persona (nombres,cedula,correo,telefono,fk_usuario,fk_tipo_usuario) values('".$nombres."','".$cedula."','".$correo."','".$telefono."','".$id."','".$tipo."') ";

$persona=mysqli_query($con,$sql1); 


echo"<script type=\"text/javascript\">alert('Se ha guardado'); window.location='index.php';</script>";  


            
           }
            



          
  }
}



       


?>
