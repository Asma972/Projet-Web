<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Leaflet.js avec couche Stamen Watercolor</title>
		<meta charset="utf-8" />
        <link rel="stylesheet" href="css/bootstrap.css" />
			<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet"  href="./css/index2.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" />
		<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"></script>
		<script type="text/javascript" src="./geojson-world-master/countries.geoJson"></script>
	</head>
	<body>
			
	<?php include("page1.php")?>
	
	
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
		<script>
			// bornes pour empecher la carte StamenWatercolor de "dériver" trop loin...
			var northWest = L.latLng(90, -180);
			var southEast = L.latLng(-90, 180);
			var bornes = L.latLngBounds(northWest, southEast);
			// Initialisation de la couche StamenWatercolor
			var coucheStamenWatercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
				attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
				subdomains: 'abcd',
				ext: 'jpg'
			});
			// Initialisation de la carte et association avec la div
			var map = new L.Map('maDiv', {
				center: [48.858376, 2.294442],
				minZoom: 2,
				maxZoom: 18,
				zoom: 5,
				maxBounds: bornes
			}).setView([48.858376, 2.294442],5);
			L.geoJson(countriesData).addTo(map);
						
			var myLines = [{
				"type": "LineString",
				"coordinates": [[-100, 40], [-105, 45], [-110, 55]]
			}, {
				"type": "LineString",
				"coordinates": [[-105, 40], [-110, 45], [-115, 55]]
			}];

			var myStyle = {
				"color": "#ff7800",
				"weight": 5,
				"opacity": 0.65
			};
			// Affichage de la carte
			map.addLayer(coucheStamenWatercolor);
			// Juste pour changer la forme du curseur par défaut de la souris
			document.getElementById('maDiv').style.cursor = 'crosshair'
			map.fitBounds(bornes);
			function zoomToFeature(e) {
				map.fitBounds(e.target.getBounds());
			}
			// Initilisation d'un popup
			var popup = L.popup();
			// Fonction de conversion au format GeoJSON
			function coordGeoJSON(latlng,precision) { 
				return '[' +
					L.Util.formatNum(latlng.lng, precision) + ',' +
					L.Util.formatNum(latlng.lat, precision) + ']';
			}
			// Fonction qui réagit au clic sur la carte (e contiendra les données liées au clic)
			function onMapClick(e) {
				popup.setLatLng(e.latlng)
					.setContent("Hello click détecté sur la carte !<br/> " + e.latlng.toString()+ "<br/>en GeoJSON: " + coordGeoJSON(e.latlng,7) + "<br/>Niveau de  Zoom: " + map.getZoom().toString())
					.openOn(map);
			}
			// Association Evenement/Fonction handler
			map.on('click', onMapClick);
		</script>
	</body>
</html>