<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
<link rel="stylesheet" href="css/style_resultats.css">
</head>

<body>
<header>
<?php 
	include'1header.php'
?>
</header>
	
	<div class="block-center">
		<div class="fond">
			<a href="je_commence.php" class="choose"><span>Choisis ta soirée</span></a>
		</div>
		<div class="affiche_resultats">
			<div class="nb-resultats">
				<h1> 35 résultats </h1>
			</div>
			<div class="resultats">
		</div>
	</div>
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src="../ressource/image/bar_3.jpg" alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> Bar 1</h2>
				</div>
				<div class="texte_article">
					<p>Donec faucibus sodales ante, at auctor sapien sodales eu. Nulla urna purus
					</p>
				</div>
			</div>
		</div>
		<div class="lien_article">
			<div class="note_article">
				<img class="infos" src="../images/etoiles.png" alt="etoiles">
			</div>
			<div class="adresse_article">
				<img class="infos" id="adresse" src="../images/placeholder.svg" alt="icone_placeholder">
				<p class="infos">10 route de chemellier</p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="../images/calendar.svg" alt="icone_horaire">
				<p class="infos">10h-15h</p>
			</div>
		</div>
	</div>
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src="../ressource/image/bar_3.jpg" alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> Bar 2</h2>
				</div>
				<div class="texte_article">
					<p>Donec faucibus sodales ante, at auctor sapien sodales eu. Nulla urna purus
					</p>
				</div>
			</div>
		</div>
		<div class="lien_article">
			<div class="note_article">
				<img class="infos" src="../images/etoiles.png" alt="etoiles">
			</div>
			<div class="adresse_article">
				<img class="infos" id="adresse" src="../images/placeholder.svg" alt="icone_placeholder">
				<p class="infos">10 route de chemellier</p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="../images/calendar.svg" alt="icone_horaire">
				<p class="infos">10h-15h</p>
			</div>
		</div>
	</div>
	
	<footer class="block-footer">
		<div class="info1">
			<p>Mentions légales</p>
		</div>
		<div class="info2">
			<p>Politique de confidentialité</p>
		</div>	
		<div class="info3">
			<p>Conditions générales</p> 
		</div>
</footer>
</body>
</html>