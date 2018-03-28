<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="body_descriptif">
<!-- HEADER -->
<?php include 'header.php'; ?>

<!-- FIN HEADER -->

<div class="block-body">
	<?php
include 'include/pdo/pdo.php';

$idEvenement = $_GET['id'];
$query = "SELECT * FROM evenement WHERE idEvenement=:id";
$statementEvenement = $connexion->prepare($query);
$statementEvenement -> bindValue(':id', $idEvenement);
$statementEvenement -> execute();

$i = 0;
while ($evenement = $statementEvenement -> fetch()) {
	$i++;

	?>
	<div class="fond">
		<span><?php echo $evenement -> nomEvenement ?></span>
	</div>
	<div class="soiree">
		<div class="partie_description">
			<div class="box_image">
				<div class="image_soiree">
					<img src='<?php echo $evenement -> photoEvenement ?>' class='image'>
				</div>
			</div>
			<div class="box_decription_soiree">
				<div class="description">
					<p class="texte"> <?php echo $evenement -> nomEvenement ?> </p>
				</div>
				<div class="adresse">
				 <?php echo $evenement -> adresseEvenement ?>
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
        		var uluru = {
				lat:<?php echo $evenement -> latitudeEvenement ?>,
				lng:<?php echo $evenement -> longitudeEvenement ?> };

        		var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 17,
         			center: uluru
        		});
        		var marker = new google.maps.Marker({
					position: uluru,
          			map: map
        		});
			};
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
