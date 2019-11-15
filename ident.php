<?php
			session_start();
			$hostname = "localhost";	
			$base= "utilisateurs";
			$loginBD= "root";	
			$passBD="";
			$tab=  array();
			
            $email = htmlspecialchars($_POST['email']);
			$nom = htmlspecialchars($_POST['nom']);
            $psw = md5($_POST['psw']);
			
			$pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
            if(!empty($email) AND !empty($psw))
            {
                $requser = $pdo->prepare("SELECT * FROM inscription WHERE email = ? AND psw = ?");
                $requser->execute(array($email, $psw));
                $userexist = $requser->rowCount();
                if($userexist == 1)
                {
                        $userinfo = $requser->fetch();
                        $tab['email'] = $userinfo['email'];
						$tab['nom'] = $userinfo['nom'];
			
						$_SESSION['tab'] = $tab;
                        header("Location: profile.php");

                }
                else
                {
                    echo "Pseudo et/ou Mot de passe erronés";
                }
            }
            else
            {
                echo "Tous les champs doivent être complétés";
            }
			

	// session_start();
	// $email =  isset($_POST['email'])?($_POST['email']):'';
	// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// $emailErr = "Invalid email format";
	// }
	// $msg = '';
	// $psw =  isset($_POST['psw'])?($_POST['psw']):'';
	// if  (count($_POST)==0) {
				// require("ident.tpl");
	// }

    // else {
	    // if  (!verif_identV3($email,$psw)) {
			 // $msg="Mail ou mot de passe non valide";
	         // echo '<script type="text/javascript">' . 'alert("Erreur : '.$msg.'");' . '</script>'; 
			 // die();
		// }
	    // else { 
			 // if((empty($email))){
				 // echo 'Erreur de saisie !';
			 // }
			 // else{
		// if(isset($_POST['email']) && isset($_POST['psw']))
		// {
			// header('Location: ../html/StamenTileLayer.html');
			// Exit;
			 // }} 
	// }
	// }	


	// function verif_identV3($email,$psw) {
		// require('connectSQL.php'); 
		// $sql="SELECT * FROM `users` WHERE email=:email AND psw=:psw";
		// try {
			// $commande = $pdo->prepare($sql);
			// $commande->bindParam(':email', $email);
			// $commande->bindParam(':psw', $psw);
			// $bool = $commande->execute();
			// if ($bool) {
				// $resultat = $commande->fetchAll(PDO::FETCH_ASSOC); 
			// }
		// }
		// catch (PDOException $e) {
			// echo utf8_encode("Echec de select : " . $e->getMessage() . "\n");
			// die(); // On arrête tout.
		// }
			// Conversion en JSON en vue d'une transmission reseau 
			// $chaineJSON = json_encode($ );
			// Transmission au client
			// echo($chaineJSON);
			
		// if (count($resultat) == 0) return false; 
		// else return true;
	// }
	

?>




