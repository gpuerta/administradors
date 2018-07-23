<?php 



	/* Connect To Database*/
	require('../../../configuracion/config.php');

	$sql1="DELETE from articulo WHERE id_articulo='".$_POST['id_articulo']."' ";

	$articulo=mysqli_query($con,$sql1);
	$sql2="DELETE from imagen_articulo WHERE id_imagen_articulo='".$_POST['id_imagen_articulo']."' ";

	$articulo=mysqli_query($con,$sql2); 


	echo"<script type=\"text/javascript\">alert('Se ha eliminado'); window.location='index.php';</script>";  





 ?>