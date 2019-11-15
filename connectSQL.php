<?php
	$hostname = "localhost";	
	$base= "utilisateurs";
	$loginBD= "root";	
	$passBD="";
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>