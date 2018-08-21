<?php
session_start();
/* Connect To Database*/
require('../configuracion/config.php');

if(!isset($_SESSION["usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
    header("Location: ../");
  }
  

?>