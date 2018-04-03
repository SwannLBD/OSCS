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
	<?php $idEvenement = $_GET['id']; ?>

	<div class="pop-up" id="pop-up" style="display: none">
		<div class="overlay" id="overlay" onClick="Overlay()"></div>

		<div class="body_pop-up">
			<div class="inner">
				<form method="post" action="ajout_comm.php?id= <?php echo $idEvenement ;?> " class="formulaire">
					<div class="titre_comm">
						<h3>Votre commentaire :</h3>
					</div>
					<div class="commentaire">
          	<textarea id="commentaire" required name="commentaire" type="text"></textarea>
					</div>
					<div class="bouton_ajout_comm">
						<input id="comm" class="ajout" type="submit" value="Ajoutez votre commentaire" />
					</div>
					<?php
					if(!empty ($_POST['commentaire'])){
						header ('Refresh:0');
					}
					else {
					}
					?>
				</form>
				</div>
			</div>
		</div>
	</div>

<!-- HEADER -->
<?php include 'include/header.php'; ?>

<!-- FIN HEADER -->



<div class="block-body">
	<?php
include 'include/pdo/pdo.php';

$idEvenement = $_GET['id'];
$query = "SELECT * FROM evenement WHERE idEvenement=:id";
$statementEvenement = $connexion->prepare($query);
$statementEvenement -> bindValue(':id', $idEvenement);
$statementEvenement -> execute();
$evenement = $statementEvenement;

$i = 0;
while ($evenement = $statementEvenement -> fetch()) {
	$i++;

	?>
	<div class="fond">
		 <span ><?php echo $evenement -> nomEvenement ?></span>
	</div>
	<div class="soiree">

		<!-- partie informations -->
		<div class="partie_informations">
				<div class="image_soiree">
					<img src='<?php echo $evenement -> photoEvenement ?>' class='image'>
				</div>
					<div class="informations_soiree">
						<div class="titre_info">
							<h3>Informations :</h3>
						</div>
						<?php if ($evenement -> dateEvenement !=0000-00-00){
							echo ('<p class="info_date">');
							echo ('<img class="info" id="date" src="images_site/calendar.svg" alt="icone_calendar">');
							$date = new DateTime($evenement -> dateEvenement);
							echo $date -> format('d-m-Y');
							echo ('</p>');
						}
						?>
						<p class="info_prix"><img class="info" id="prix" src="images_site/euro.svg" alt="icone_placeholder">
							<?php $prix = $evenement ->prixEvenement;
							$prix = str_replace('.', ',', $prix);
							if ($prix == 0) {
								echo "entrée gratuite";
							}else {
								echo $prix," €";
							}
							?>
						</p>
						<p class="info_horaire"><img class="info" id="horaire" src="images_site/clock.svg" alt="icone_horaire">
							<?php
							$heure = $evenement -> heureEvenement;
							list($heures, $minutes) = explode('.', $heure);

							if ($minutes < 10) {
								$heuretexte = $heures."h".'0'.$minutes*0.6;
							} else {
								$heuretexte = $heures."h".$minutes*0.6;
							}
							echo $heuretexte;
							if ($evenement -> finEvenement != 0) {
								$heure = $evenement -> finEvenement;
								list($heures, $minutes) = explode('.', $heure);

								if ($minutes < 10) {
									$heuretexte = $heures."h".'0'.$minutes*0.6;
								} else {
									$heuretexte = $heures."h".$minutes*0.6;
								}
								echo (' - '. $heuretexte );
							}

							if ($evenement -> dureeEvenement != 0){
								echo ('<p class="info_duree">Durée : environ '. $evenement -> dureeEvenement .'</p>');
							}
							?>
						</p>
						<p class="info_adresse"><img class="info" id="adresse" src="images_site/placeholder.svg" alt="icone_placeholder">
						<?php
						echo ($evenement -> adresseEvenement . ', ' . $evenement -> villeEvenement);
						?>
						</p>
					</div>
			</div>

			<!-- partie description -->
			<div class="description_evenement">
				<div class="titre_info">
					<h3>Description évènement </h3>
				</div>
				<p><?php echo $evenement -> descriptionEvenement ?></p>
			</div>

			<!-- partie commentaire -->
			<div class="commentaire">
				<h3> Avis </h3>
				<?php
        	// Récupération des commentaires
          $query = "SELECT * FROM commentaires WHERE idEvenement=:id";
          $statementEvenement = $connexion->prepare($query);
        	$statementEvenement -> bindValue(':id', $idEvenement);
          $statementEvenement -> execute();

          $i = 0;
          while ($commentaire = $statementEvenement -> fetch()) {
          $i++;

            // Récupération des membres
            $query = "SELECT * FROM membres WHERE idMembre =" . $commentaire -> idMembre;
            $statement = $connexion->prepare($query);
            $nom = $statement -> execute();

						echo ("<div class='affichage_commentaire'>");
						if($commentaire -> idEvenement == $evenement -> idEvenement){

							$ii = 0;
	            while ($nom = $statement -> fetch()) {
	            $ii ++;

								echo ("<div class='commentaires'>");
									echo ("<div class='identifiants'>");
										echo ("<p> " . $nom -> prenomMembre . "</p>");
										echo ("<p> " . $nom -> nomMembre . "</p>");
									echo ("</div>");
									echo ("<div class='contenu_commentaire'>");
										echo ("<p>" . $commentaire -> commentaire . '</p>');
									echo ("</div>");
								echo ("</div>");
							}
							} else {
						}
						echo ("</div>");
          }
        ?>
				<div class="bouton_commentaire">
					<button id="button" onclick="javascript:showComment()"> Ajoutez un commentaire </button>
				</div>
			</div>

			<!-- partie map -->
			<div class="partie_map">
			<h3>Map de l'évènement</h3>
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
   	 		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjWm01pR4lnDyonlwS0vmS-aYHfPfQPq8&callback=initMap">
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
<script type="text/javascript" src="javascript/pop-up.js"></script>
</html>
