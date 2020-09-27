<?php 

	$obtenerMicrotime = microtime();
	$obtenerMicrotime = md5($obtenerMicrotime);
	$obtenerMicrotime = substr($obtenerMicrotime, 0, 25);
	$usuario = $obtenerMicrotime.'@yopmail.com';
	echo $usuario;
?>