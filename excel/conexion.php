<?php

    define("HOST_IP", "localhost"); //poner el servidor
	define("HOST_DB_USER","root"); //poner el usuario de la bd
	define("HOST_DB_PASSWORD", ""); // poner la clave de la bd
	define("HOST_DB_NAME", "proconalu");	//poner el nombre de la bd

	function getConnection()
	{
		$mysqli = new mysqli(HOST_IP, HOST_DB_USER, HOST_DB_PASSWORD, HOST_DB_NAME);
		if ($mysqli->connect_errno) 
		{
			echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
			return null;
		}
		else
		{
			//mysqli_set_charset($mysqli, "utf8");
			return $mysqli;
		}	
	}	
?>