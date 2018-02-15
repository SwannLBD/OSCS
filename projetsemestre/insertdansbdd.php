<?php

	require('include/pdo/pdo.php');

	//pour ajoutez une ligne
	/*$queryAjout = "INSERT INTO bar (ID_bar, nomBar, adresseBar, horraireOuvBar, horraireFermBar, noteBar, avisBar, descBar,photoBar)
  VALUES('1', 'La cave de la Trinquette', '21 Boulevard Carnot, 49100 Angers', '17h', '21h', '5/5', 'Superbe ambiance, Jadore le concepte familiale de la trinquette.', 'Cave', '')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";*/

	//pour ajoutez une ligne
	$queryAjout = "INSERT INTO bar (nomBar, adresseBar, horraireOuvBar, horraireFermBar, noteBar, avisBar, descBar, photoBar)
	VALUES('Le Ti bar', '45 Rue du Mail, 49100 Angers', '18h15', '02h00', '4', 'Très bon bar où l'ambiance est sympa et les shooters sont variés et originaux.', 'Shooters', 'bite')";
	$nbModif = $connexion-> exec($queryAjout);
	echo "<p> Le nombre de modifications est de $nbModif </p>";

		//pour modifier une ligne
		/*UPDATE `bar` SET `horraireFermBar` = '21h00'
		WHERE `bar`.`ID_bar` = 1;*/



?>
