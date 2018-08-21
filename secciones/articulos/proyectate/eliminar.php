<?php 



	/* Connect To Database*/
	require('../../../configuracion/config.php');

	
	$sql2="DELETE from proyectate WHERE id_proyectate='".$_POST['id_proyectate']."' ";

	$articulo=mysqli_query($con,$sql2); 


	echo"<script type=\"text/javascript\">alert('Se ha eliminado'); window.location='index.php';</script>";  





 ?>