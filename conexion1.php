<?php
	$mysqli = mysqli_connect('localhost', 'root', '', 'facturero');
	
	if(mysqli_connect_errno($mysqli)){
		
		echo ('Error en la conexion' . mysqli_connect_error());	
	}
?> 