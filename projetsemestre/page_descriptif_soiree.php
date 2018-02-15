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
	<div class="fond">
		<span>Bar n°1</span>
	</div>
	<div class="soiree">
		<div class="partie_description">
			<div class="box_image">
				<div class="image_soiree">
					<img src="images_bdd/Bars/LaTrinquette.jpeg" class="image">
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
				<?php include 'include/map.php'?>
		</div>
	</div>
</div>
	
<!-- FOOTER -->	
<?php include 'include/footer.php'	?>
<!-- FIN FOOTER-->
	
	
</body>
</html>