<?php
	$servidor="localhost";
	$usuario="root";
	$password="password";
	$baseDeDatos="colegio";

	$db= mysqli_connect($servidor,$usuario,$password,$baseDeDatos);

	mysqli_query($db,"SET NAMES 'utf8'");

    if (!isset($_SESSION))
	{
		session_start();
    }else
	{
     echo "Error Conexion";
    }
?>