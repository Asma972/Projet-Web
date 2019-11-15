
<?php

session_start();
?>

<html lang="fr">
	<head>      
            <title>Globe Trotters</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet"  href="../css/index1.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
            <script src="../js/index.js" type="text/javascript"></script>
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=YOUR_API_KEY">  </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
			
			<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
			<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		
          
		  </head>
     <body>
	 	<div class="header">
				<img src="../images/logo.png" class="logo"  > Globe trotteurs</a>
						<div class="header-right">
						<a href="../php/home.php">Home</a>
						<a href="../php/deconnexion.php">Deconnexion</a>
										
				</div>
			</div> 
	<div class="glow">
					<div class="centre">
				<div class="span8">
					<p>Bonjour <?php echo $_SESSION['tab']['nom']; ?> !</p>
					<p>Votre mail:<?php echo $_SESSION['tab']['email'];?></p>
					<a href="../html/StamenTileLayer.html"><input type="submit" value="Questionnaire Capitales/Pays" id="idDiv1"></a>
					<a href="../html/StamenTileLayer2.html"><input type="submit" value="Questionnaire Pays/Capitales" id="idDiv2"></a>

				</div>
			</div>
		
  

 
    </body>
</html>