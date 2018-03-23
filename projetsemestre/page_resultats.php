<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<header>

<?php

	include 'header.php';
	require('include/pdo/pdo.php');
?>

</header>
	<div class="block-center">
		<div class="fond">
			<a class="choose"><span>Choisis ta soirée</span></a>
		</div>
		<div class="affiche_resultats">
			<div class="nb-resultats">
				<h1> 8 résultats </h1>
			</div>
			<div class="resultats">
		</div>
	</div>
<?php

$connexionStr=new PDO("mysql:host=localhost;dbname=formulaire;charset=utf8",'root','root');

$bar = $connexionStr->query ("SELECT * FROM bar ");

while($donnees = $bar -> fetch())
	{
?>
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src= <?php echo $donnees['photoBar'] ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2>
						<a href="page_descriptif_soiree.php?id=<?php echo $donnees['ID_bar'];?>">
							<?php echo $donnees['nomBar'] ?>
						</a>
					</h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $donnees['avisBar'] ?>
					</p>
				</div>
			</div>
		</div>
		<div class="lien_article">
			<div class="note_article">
				<img class="infos" src="images_site/etoiles.png" alt="etoiles">
			</div>
			<div class="adresse_article">
				<img class="infos" id="adresse" src="images_site/placeholder.svg" alt="icone_placeholder">
				<p class="infos"> <?php echo $donnees['adresseBar'] ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo ($donnees['horraireOuvBar'] . '-' . $donnees['horraireFermBar']) ?></p>
			</div>
		</div>
	</div>

<?php

	}
	$bar->closeCursor();
	include "include/footer.php";
?>
</body>
</html>
