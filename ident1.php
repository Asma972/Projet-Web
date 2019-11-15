<?php
  $nom = htmlspecialchars($_POST["nom"]);
  $prenom = htmlspecialchars($_POST["prenom"]);
  $email = htmlspecialchars($_POST["email"]);
  $psw= md5($_POST['psw']);
  
  $bdd = new PDO('mysql:host=localhost;dbname=utilisateurs;charset=utf8', 'root', '');
		  
            if(!empty($_POST['email']) AND !empty($_POST['nom'])  AND !empty($_POST['prenom']) AND !empty($_POST['psw']))
            {
                $reqmail = $bdd->prepare("SELECT * FROM users WHERE email= ?");
                $reqmail->execute(array($email));
				$mailexist = $reqmail->rowCount();
                if($mailexist == 0)
                {
                        
						$req1 = $bdd->prepare('INSERT INTO inscription(nom, prenom, email, psw, data_inscription) VALUES(:nom, :prenom, :email, :psw, CURDATE())');
						$req1->execute(array(
							'nom' => $nom,
							'prenom' => $prenom,
							'email' => $email,
							'psw' => $psw,
							));
							$req= $bdd->prepare('INSERT INTO users(email, psw) VALUES( :email, :psw)');
							$req->execute(array(
								'email' => $email,
								'psw' => $psw,
								));
							header('Location: connexion.php');
                    }
                else
                {
                     $msg="Ce mail existe déja !";
					 echo '<script type="text/javascript">' . 'alert("Erreur : '.$msg.'");' . '</script>'; 
					
             
                }
            }
             else
             {
          
			    $msg="Tous les champs doivent etre remplis";
					 echo '<script type="text/javascript">' . 'alert("Erreur : '.$msg.'");' . '</script>'; 
					
                
             }
        
 
?>
