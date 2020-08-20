<?php 
		$host = "mysql.webcindario.com";
		$user = "sudarmenia";
		$pw = "25021967";
		$db = "sudarmenia";

		$conex = mysqli_connect($host, $user, $pw) or die('Error de conexión');
		mysqli_select_db($conex, $db) or die('Error de base de datos');	
		if (mysqli_connect_errno()){
			echo "Error en la conexción de la BD";
			exit();  //Si presenta error lo saca del codigo PHP
		}
		mysqli_set_charset($conex, "utf8");  // CORRIGE LOS ERRORES DE CARACTERES ESPECIALES EN LA BD
?>