<!DOCTYPE html>
<html lang="fr">
	<head>      
            <title>Globe Trotters</title>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet"  href="../css/index.css" type="text/css" media="screen" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"crossorigin="anonymous">
			<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=YOUR_API_KEY">  </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     
		  </head>
     <body>
					 
	<?php include("page1.php")?>
	
			<div class="glow">
					<div class="centre">
							<p >Bienvenue dans le Globe Trotters, découvrons le monde ensemble !</p><br>
				  
					</div>   
			</div>
			<br>
			
			<div id="conteneur">
			<div class="centre2">
					<a href="../html/StamenTileLayer.html"><input type="submit" value="Questionnaire Capitales/Pays" id="idDiv1"></a>
					<a href="../html/StamenTileLayer2.html"><input type="submit" value="Questionnaire Pays/Capitales" id="idDiv2"></a>
					// <input type="submit" value="Questionnaire Mystére" id="idDiv3">
					
			
			</div>
			</div>
			
			<div id="conteneur2">
					 		
			<div class="w3-content w3-display-container" style="max-width:800px">
					<img class="mySlides" src="../images/paris2.jpg" style="width:100%">
					<img class="mySlides" src="../images/berlin2.jpg" style="width:100%">
					<img class="mySlides" src="../images/washington.jpg" style="width:100%">
							<div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
									<div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
									<div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
									<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
									<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
									<span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
							</div>
			</div>

			<script>
			var slideIndex = 1;
			showDivs(slideIndex);

			function plusDivs(n) {
					showDivs(slideIndex += n);
			}

			function currentDiv(n) {
					showDivs(slideIndex = n);
			}

			function showDivs(n) {
				  var i;
				  var x = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("demo");
				  if (n > x.length) {slideIndex = 1}
				  if (n < 1) {slideIndex = x.length}
				  for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";  
				  }
				  for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" w3-white", "");
				  }
				  x[slideIndex-1].style.display = "block";  
				  dots[slideIndex-1].className += " w3-white";
			}
			</script>
		  
			</div>
			<br>
			
			
			<div id="myDIV" class="bas">
					<h1 style="color:white" > Présentation de nos jeux </h1><br>
					<h3 style="color:white">Nous présentons principalement 2 types de jeux en ligne.</h3>

					
					<ul>
						<li>Des jeux de localisation
						Vous devez cliquer le plus près possible de 
						la ville ou du lieu demandé. Vos points sont calculés 
						en fonction de la distance entre votre clic et la vraie localisation.
						 </li>

						<li>Des jeux de pays devez cliquer sur le pays demandés. Vos points augmentes en fonctions 
						des tentatives réalisées pour trouver la bonne zone.</li>
					</ul>
			</div>
				


       <?php include("page2.php"); ?>

 
    </body>
</html>
