<?php 
	session_start(); 
/* Connect To Database*/
require('../configuracion/config.php');
if(isset($_POST['login'])){
				$usuario = $_POST['usuario'];
				$pw = md5($_POST['clave']);
				$log = mysqli_query($con,"SELECT * FROM
persona
INNER JOIN tipo_usuario ON persona.fk_tipo_usuario = tipo_usuario.id_tipo_usuario
INNER JOIN usuario ON persona.fk_usuario = usuario.id_usuario WHERE usuario='".$usuario."' AND clave='".$pw."'");
				if (mysqli_num_rows($log)>0) {
					$row = mysqli_fetch_array($log);
					$_SESSION["usuario"] = $row['usuario']; 
					$_SESSION["id_tipo_usuario"] = $row['id_tipo_usuario']; 
				  	echo 'Iniciando sesión para '.$_SESSION['usuario'].' <p>';
					echo '<script> window.location="../secciones/"; </script>';
				}
				else{
					echo '<script> alert("Usuario o contraseña incorrectos.");</script>';
					echo '<script> window.location="../index.php"; </script>';
				}
			}

 ?>