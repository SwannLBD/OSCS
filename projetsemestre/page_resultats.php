<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page résultats</title>
<link rel="stylesheet" href="css/style_resultats.css">
</head>

<body>
<header>

	<?php 
	
	include 'include/1header.php';
	require('include/pdo/pdo.php');
	
	
	//Bar 1 DANS LA TABLE bar
	$query = "SELECT * FROM bar WHERE ID_bar='1'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($bar1 = $stmt -> fetch()) {

//Bar 2 DANS LA TABLE Bar
		$query = "SELECT * FROM bar WHERE ID_bar='2'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($bar2 = $stmt -> fetch()) {

//Bar 3 DANS LA TABLE Bar
		$query = "SELECT * FROM bar WHERE ID_bar='3'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($bar3 = $stmt -> fetch()) {

//Concert 1 DANS LA TABLE Concert
		$query = "SELECT * FROM concert WHERE ID_concert='1'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($concert1 = $stmt -> fetch()) {

//Concert 2 DANS LA TABLE Concert
		$query = "SELECT * FROM concert WHERE ID_concert='2'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($concert2 = $stmt -> fetch()) {

//Theatre 1 DANS LA TABLE Theatre
		$query = "SELECT * FROM theatre WHERE ID_theatre='1'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($theatre1 = $stmt -> fetch()) {

//Theatre 2 DANS LA TABLE Theatre
		$query = "SELECT * FROM theatre WHERE ID_theatre='2'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($theatre2 = $stmt -> fetch()) {
			
//Theatre 3 DANS LA TABLE Theatre
		$query = "SELECT * FROM theatre WHERE ID_theatre='3'";
		$stmt = $connexion->prepare($query);
		$stmt -> execute();

		while($theatre3 = $stmt -> fetch()) {			
			
	?>
	
	
	
	
	
	
	

</header>
	<div class="block-center">
		<div class="fond">
			<a href="je_commence.php" class="choose"><span>Choisis ta soirée</span></a>
		</div>
		<div class="affiche_resultats">
			<div class="nb-resultats">
				<h1> 8 résultats </h1>
			</div>
			<div class="resultats">
		</div>
	</div>
	<?php foreach
			?>
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $bar1 -> photoBar ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $bar1 -> nomBar ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $bar1 -> avisBar ?>
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
				<p class="infos"> <?php echo $bar1 -> adresseBar ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"> <?php echo ($bar1 -> horraireOuvBar . '-' . $bar1 -> horraireFermBar) ?> </p>
			</div>
		</div>
	</div>
		
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $bar2 -> photoBar ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $bar2 -> nomBar ?> </h2>
				</div>
				<div class="texte_article">
					<p><?php echo $bar2 -> avisBar ?>
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
				<p class="infos"> <?php echo $bar2 -> adresseBar ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo ($bar2 -> horraireOuvBar . '-' . $bar2 -> horraireFermBar) ?></p>
			</div>
		</div>
	</div>
		
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $bar3 -> photoBar ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $bar3 -> nomBar ?> </h2>
				</div>
				<div class="texte_article">
					<p><?php echo $bar3 -> avisBar ?>
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
				<p class="infos"> <?php echo $bar3 -> adresseBar ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo ($bar3 -> horraireOuvBar . '-' . $bar3 -> horraireFermBar) ?></p>
			</div>
		</div>
	</div>
		
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $concert1 -> photoConcert ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $concert1 -> nomConcert ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $concert1 -> avisConcert ?>
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
				<p class="infos"> <?php echo $concert1 -> adresseConcert ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo $concert1 -> lienConcert ?></p>
			</div>
		</div>
	</div>	
		
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $concert2 -> photoConcert ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $concert2 -> nomConcert ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $concert2 -> avisConcert ?>
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
				<p class="infos"> <?php echo $concert2 -> adresseConcert ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo $concert2 -> lienConcert ?></p>
			</div>
		</div>
	</div>	
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $theatre1 -> photoTheatre ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $theatre1 -> nomTheatre ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $theatre1 -> avisTheatre ?>
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
				<p class="infos"> <?php echo $theatre1 -> adresseTheatre ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo $theatre1 -> lienTheatre ?></p>
			</div>
		</div>
	</div>	
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $theatre2 -> photoTheatre ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $theatre2 -> nomTheatre ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $theatre2 -> avisTheatre ?>
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
				<p class="infos"> <?php echo $theatre2 -> adresseTheatre ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo $theatre2 -> lienTheatre ?></p>
			</div>
		</div>
	</div>	
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src=<?php echo $theatre3 -> photoTheatre ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2> <?php echo $theatre3 -> nomTheatre ?> </h2>
				</div>
				<div class="texte_article">
					<p> <?php echo $theatre3 -> avisTheatre ?>
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
				<p class="infos"> <?php echo $theatre3 -> adresseTheatre ?> </p>
			</div>
			<div class="horaire_article">
				<img class="infos" id="horaire" src="images_site/calendar.svg" alt="icone_horaire">
				<p class="infos"><?php echo $theatre3 -> lienTheatre ?> </p>
			</div>
		</div>
	</div>
		
	<?php
		}

		}

		}

		}

		}

		}
		
		}
		
		}
			
	include "include/footer.php";
	?>
</body>
</html>