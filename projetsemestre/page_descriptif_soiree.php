<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page descriptif soirée</title>
<link rel="stylesheet" href="css/style_resultats.css">	
</head>

<body>
<!-- HEADER -->	
<?php include 'include/1header.php'	?>	
<!-- FIN HEADER -->	
	
<div class="block-body">
	<?php 
	$idBar = $_GET['id'];
	$query = "SELECT * FROM bar WHERE ID_bar=:id";
	$statementBar = $connexion->prepare($query);
	$statementBar -> bindValue('id', $idBar);
	$statementBar -> execute();
	$i = 0;
	while($bar = $statementBar -> fetch()) {
		$i++;
	
	?>
	<div class="fond">
		<span>Bar n°1</span>
	</div>
	<div class="soiree">
		<div class="partie_description">
			<div class="box_image">
				<div class="image_soiree">
					<img src= <?php $bar -> photoBar ;?> class="image">
				</div>
			</div>
			<div class="box_decription_soiree">
				<div class="description">
					<p class="texte"> La cave de la Trinquette à Angers est la meilleure du monde </p>
				</div>
				<div class="adresse">
				 10 route de chemellier
				</div>
				<div class="etoiles">
				 <img src="images_site/etoiles.png">
				</div>
			</div>	
		</div>
		<div class="avis">
			<div>
				<h3> Avis </h3>
				<p="commentaire"> Trop bien !</p>
			</div>
		</div>
		<div class="partie_map">
			<div id="map"></div>
    		<script>
      		function initMap() {
        		var uluru = {lat: 47.474889, lng:  -0.547111};
        		var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 19,
         			center: uluru
        		});
        		var marker = new google.maps.Marker({
					position: uluru,
          			map: map
        		});
			}
    	</script>
   	 	<script async defer
    		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjWm01pR4lnDyonlwS0vmS-aYHfPfQPq8&callback=initMap">
    	</script>
		</div>
	</div>
</div>
	
<!-- FOOTER -->	
	
	
<?php 
		
	}
	include 'include/footer.php'	
?>
<!-- FIN FOOTER-->
	
	
</body>
</html>