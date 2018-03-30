<?php	session_start(); ?>

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
	include 'include/1header.php';
	require('include/pdo/pdo.php');
?>

</header>
	<div class="block-center">
		<div class="fond">
			<a class="choose"><span>Choisis ta soirée</span></a>
		</div>
		<div class="affiche_resultats">
			<div class="nb-resultats">
				<!-- <h1> 8 résultats </h1> -->
			</div>
			<div class="resultats">
		</div>
	</div>

<?php

//On récupère la réponse de la question précédente
$_SESSION['reponse3'] = $_GET['reponse3'];


$heure1 = 19.50;
$heure2 = 20.00;
$heure3 = 20.50;
$prix1 = 15;
$prix2 = 30;

if ($_SESSION['reponse1'] == 1 || $_SESSION['reponse1'] == 2 || $_SESSION['reponse1'] == 3) {
	//Si l'horaire est avant 19h30
	if($_SESSION['reponse2'] == 5) {

		//et prix inférieur à 15€
		if ($_SESSION['reponse3'] == 9) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement < $prix1)";

		//et prix compris entre 15€ et 30€
		} else if ($_SESSION['reponse3'] == 10) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement >= $prix1) AND (prixEvenement < $prix2)";

		//et prix supérieur à 30€
		} else if ($_SESSION['reponse3'] == 11) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1) AND (prixEvenement >= $prix2)";

		//et prix pas important
		} else {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (heureEvenement <= $heure1)";
		}

	//Si l'horaire est entre 19h30 et 20h00
	} else if ($_SESSION['reponse2'] == 6) {

		//et prix inférieur à 15€
		if ($_SESSION['reponse3'] == 9) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (heureEvenement <= $heure2) AND (prixEvenement < $prix1)";

		//et prix compris entre 15€ et 30€
		} else if ($_SESSION['reponse3'] == 10) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (heureEvenement <= $heure2)  AND (prixEvenement < $prix2)";

		//et prix supérieur à 30€
		} else if ($_SESSION['reponse3'] == 11) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement) AND (prixEvenement >= $prix2)";


		//et prix pas important
		} else {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure1 < heureEvenement)";
		}

	//Si l'horaire est entre 20h00 et 20h30
	} else if ($_SESSION['reponse2'] == 7) {
		//et prix inférieur à 15€
		if ($_SESSION['reponse3'] == 9) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix1)";

		//et prix compris entre 15€ et 30€
		} else if ($_SESSION['reponse3'] == 10) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix2)";

		//et prix supérieur à 30€
		} else if ($_SESSION['reponse3'] == 11) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement >= $prix2)";


		//et prix pas important
		} else {
			$query = "SELECT * FROM evenement WHERE idType=:id AND ($heure2 < heureEvenement) AND (heureEvenement <= $heure3)";
		}

	//Si l'horaire importe peu
	} else {
		//et prix inférieur à 15€
		if ($_SESSION['reponse3'] == 9) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (prixEvenement < $prix1)";

		//et prix compris entre 15€ et 30€
		} else if ($_SESSION['reponse3'] == 10) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (prixEvenement < $prix2)";

		//et prix supérieur à 30€
		} else if ($_SESSION['reponse3'] == 11) {
			$query = "SELECT * FROM evenement WHERE idType=:id AND (prixEvenement >= $prix2)";

		//et prix pas important
		} else {
			$query = "SELECT * FROM evenement WHERE idType=:id";
		}

	}

	//Si la réponse au type de soirée est peu importe
	} else if ($_SESSION['reponse1'] == 4) {

		//Si l'horaire est avant 19h30
		if($_SESSION['reponse2'] == 5) {

			//et prix inférieur à 15€
			if ($_SESSION['reponse3'] == 9) {
				$query = "SELECT * FROM evenement WHERE (heureEvenement <= $heure1) AND (prixEvenement < $prix1)";

			//et prix compris entre 15€ et 30€
			} else if ($_SESSION['reponse3'] == 10) {
				$query = "SELECT * FROM evenement WHERE (heureEvenement <= $heure1) AND (prixEvenement >= $prix1) AND (prixEvenement < $prix2)";

			//et prix supérieur à 30€
			} else if ($_SESSION['reponse3'] == 11) {
				$query = "SELECT * FROM evenement WHERE (heureEvenement <= $heure1) AND (prixEvenement >= $prix2)";

			//et prix pas important
			} else {
				$query = "SELECT * FROM evenement WHERE (heureEvenement <= $heure1)";
			}

		//Si l'horaire est entre 19h30 et 20h00
		} else if ($_SESSION['reponse2'] == 6) {

			//et prix inférieur à 15€
			if ($_SESSION['reponse3'] == 9) {
				$query = "SELECT * FROM evenement WHERE ($heure1 < heureEvenement) AND (heureEvenement <= $heure2) AND (prixEvenement < $prix1)";

			//et prix compris entre 15€ et 30€
			} else if ($_SESSION['reponse3'] == 10) {
				$query = "SELECT * FROM evenement WHERE ($heure1 < heureEvenement) AND (heureEvenement <= $heure2)  AND (prixEvenement < $prix2)";

			//et prix supérieur à 30€
			} else if ($_SESSION['reponse3'] == 11) {
				$query = "SELECT * FROM evenement WHERE ($heure1 < heureEvenement) AND (prixEvenement >= $prix2)";

			//et prix pas important
			} else {
				$query = "SELECT * FROM evenement WHERE ($heure1 < heureEvenement)";
			}

		//Si l'horaire est entre 20h00 et 20h30
		} else if ($_SESSION['reponse2'] == 7) {
			//et prix inférieur à 15€
			if ($_SESSION['reponse3'] == 9) {
				$query = "SELECT * FROM evenement WHERE ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix1)";

			//et prix compris entre 15€ et 30€
			} else if ($_SESSION['reponse3'] == 10) {
				$query = "SELECT * FROM evenement WHERE ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement < $prix2)";

			//et prix supérieur à 30€
			} else if ($_SESSION['reponse3'] == 11) {
				$query = "SELECT * FROM evenement WHERE ($heure2 < heureEvenement) AND (heureEvenement <= $heure3) AND (prixEvenement >= $prix2)";

			//et prix pas important
			} else {
				$query = "SELECT * FROM evenement WHERE ($heure2 < heureEvenement) AND (heureEvenement <= $heure3)";
			}


		//Si l'horaire importe peu
		} else {
			//et prix inférieur à 15€
			if ($_SESSION['reponse3'] == 9) {
				$query = "SELECT * FROM evenement WHERE (prixEvenement < $prix1)";

			//et prix compris entre 15€ et 30€
			} else if ($_SESSION['reponse3'] == 10) {
				$query = "SELECT * FROM evenement WHERE (prixEvenement < $prix2)";

			//et prix supérieur à 30€
			} else if ($_SESSION['reponse3'] == 11) {
				$query = "SELECT * FROM evenement WHERE (prixEvenement >= $prix2)";

			//et prix pas important
			} else {
				$query = "SELECT * FROM evenement";
			}
		}
		//S'il y a un bug
		} else {
			echo "Oula... <a href='commencerformulaire.php'> Retour au début du questionnaire</a>";
		}

	$statementEvenement = $connexion->prepare($query);
	$statementEvenement -> bindValue(':id', $_SESSION['reponse1']);
	$statementEvenement -> execute();

	$i = 0;
	while ($evenement = $statementEvenement -> fetch()) {
		$i++;
 ?>
	<a href="page_descriptif_soiree.php?id=<?php echo $evenement -> idEvenement;?>" class="un_article">
	<div class="article">
		<div class="presentation">
			<img class="photo_article" src= <?php echo $evenement -> photoEvenement ?> alt="photo_article">
			<div class="description">
				<div class="titre_article">
					<h2>
							<?php echo $evenement -> nomEvenement; ?>
					</h2>
				</div>
				<div class="texte_article">
					<p>
						<?php echo $evenement -> descriptionEvenement; ?>
					</p>
				</div>
			</div>
		</div>
		<div class="lien_article">
			<div class="ville_article">
				<div class="infos">

					<p class="info_texte"> <img class="info" id="adresse" src="images_site/placeholder.svg" alt="icone_placeholder">
						<?php echo $evenement -> villeEvenement ?>
					</p>
				</div>
			</div>
			<div class="prix_article">
				<div class="infos">
					<p class="info_texte"> <img class="info" id="prix" src="images_site/euro.svg" alt="icone_placeholder">
						<?php $prix = $evenement ->prixEvenement;
						$prix = str_replace('.', ',', $prix);
						if ($prix == 0) {
							echo "entrée gratuite";
						}else {
							echo $prix," €";
						}
						?></p>
				</div>
			</div>
			<div class="horaire_article">
				<div class="infos">

					<p class="info_texte"><img class="info" id="horaire" src="images_site/clock.svg" alt="icone_horaire">
						<?php
						$heure = $evenement -> heureEvenement;
						list($heures, $minutes) = explode('.', $heure);

						if ($minutes < 10) {
							$heuretexte = $heures."h".'0'.$minutes*0.6;
						} else {
							$heuretexte = $heures."h".$minutes*0.6;
						}
						echo $heuretexte;
					?></p>
				</div>
			</div>
		</div>
	</div>
	</a>

<?php

}

	if ($i == 0) {
		echo "<p>Il n'y a pas de résultats, réessaie en <a href='commencerformulaire.php'>cliquant ici</a></p>";
	}

?>

</body>
<?php
include "include/footer.php";
?>
</html>
