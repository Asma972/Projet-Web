<?php
	$hostname = "localhost";	
	$base= "utilisateurs";
	$loginBD= "root";	
	$passBD="";
	$resultat = array();
	try
	{
		$pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
	}
	catch (Exception $e)
	{
			die('Erreur : ' . $e->getMessage());
	}
	
		try{
			$commande =  $pdo->prepare("select * from questions");
			$commande->bindParam(':id_question', $id_question);
			$commande->execute();
			//$resultat = $commande->fetchAll(PDO::FETCH_ASSOC);
			
			while ($ligne = $commande->fetch()){
				array_push($resultat, $ligne);
			}
			
			echo json_encode($resultat);
		}
	catch (PDOException $e)
    {
		die();
	}

?>