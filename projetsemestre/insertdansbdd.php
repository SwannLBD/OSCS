<?php

	require('include/pdo/pdo.php');

	//pour ajoutez une ligne
	/*$queryAjout = "INSERT INTO bar (ID_bar, nomBar, adresseBar, horraireOuvBar, horraireFermBar, noteBar, avisBar, descBar,photoBar)
  VALUES('1', 'La cave de la Trinquette', '21 Boulevard Carnot, 49100 Angers', '17h', '21h', '5/5', 'Superbe ambiance, Jadore le concepte familiale de la trinquette.', 'Cave', '')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";*/

	//pour ajoutez une ligne
	/*$queryAjout = "INSERT INTO theatre (nomTheatre, adresseTheatre, noteTheatre, avisTheatre, descTheatre, photoTheatre, lienTheatre)
	VALUES('Le Grand Theatre', 'Place du Ralliement, 49000 Angers', '5/5', 'Salle confortable pour aller voir les differents spectacles proposés.', '', '', 'http://www.angers.fr/vivre-a-angers/culture/theatre/grand-theatre/index.html')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";*/

	/* $queryAjout = "INSERT INTO theatre (nomTheatre, adresseTheatre, noteTheatre, avisTheatre, descTheatre, photoTheatre, lienTheatre)
	VALUES('Theatre Chanzy', '30 Avenue de Chanzy, 49000 Angers', '4/5', 'Salle intime et conviviale.', '', '', 'https://www.spectacles.carrefour.fr/salles/angers/theatre-chanzy')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>"; */

	/* $queryAjout = "INSERT INTO theatre (nomTheatre, adresseTheatre, noteTheatre, avisTheatre, descTheatre, photoTheatre, lienTheatre)
	VALUES('Le Quai', 'Cale de la Savette, 49000 Angers', '4/5', 'Salle agréable, recommande pour les familles', '', '', 'http://www.lequai-angers.eu')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>"; */

	/* $queryAjout = "INSERT INTO concert (nomConcert, adresseConcert, noteConcert, avisConcert, descConcert, photoConcert, lienConcert)
	VALUES('Le Chabada', '56 Boulevard du Doyenné, 49100 Angers', '5/5', 'Une bonne programmation variée.', '', '', 'http://www.lechabada.com')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>"; */

	/* $queryAjout = "INSERT INTO concert (nomConcert, adresseConcert, noteConcert, avisConcert, descConcert, photoConcert, lienConcert)
	VALUES('Salle Amphitea 4000', 'Parc des expos, Angers', '4/5', 'Salle de spectacle conviviale et moderne !', '', '', 'http://www.infoconcert.com/salle/salle-amphitea-4000--parc-des-expos-dangers-1699/concerts.html')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>"; */

		//pour modifier une ligne
		/*UPDATE `bar` SET `horraireFermBar` = '21h00'
		WHERE `bar`.`ID_bar` = 1;*/



?>
