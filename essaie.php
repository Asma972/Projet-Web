<!DOCTYPE html>
<html lang="fr">
	<head>
	<title>Leaflet.js avec couche Stamen Watercolor</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="../css/bootstrap.css" />
			<link rel="stylesheet" href="../css/style.css" />
		<link rel="stylesheet"  href="../css/index2.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
		<script type="text/javascript" src="../geojson-world-master/countries.geoJson"></script>
		<script type="text/javascript" src="../countries-master/data/aus.geo.json"></script>
	</head>
	<body>
	
	
	<?php include("../php/page1.php")?>
	
	
	<div class="left">
		<p>Quel est la capitale de la France ? </p>
		<p>Quel est la capitale de l'Algérie ? </p>
		<p>Quel est la capitale de l'italie ? </p>
		<p>Quel est la capitale du Brézil ? </p>
		<p>Quel est la capitale de l'Espagne ? </p>
		<p>Quel est la capitale de la Tunisie ? </p>
		<p>Quel est la capitale de la Lybie ? </p>
    </div>
	
		<div class="right">
		<h1> Jeu de la carte</h1>
				<div class="container">
						<div class="row img-responsive" id="hi">
						</div>
								<div class="row hidden-sm hidden-xs well">
									<br>
											<p>Régles du jeu</p> <br>
											<p>Il faut gagner </p>
								</div>
								<div class="row">
										<div class="col-sm-3 col-lg-4 col-md-3">
												<p id="question">Question: Ceci est un exemple ? </p>
												<p id="reponse">Vrai ou Faux nb points</p>
										</div>	
										<div class="col-sm-9 col-xs-12 col-lg-8 col-md-9">
													<div class="img-responsive" id="maDiv" style="width: 800px; height: 600px"></div>
										</div>
								</div>
				</div>
		 </div>

		<script src="../js/jeu.js"></script>
		
	</body>
</html>
