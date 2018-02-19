<?php
	session_start();	//Création d'une session

	$base_donnee 	= mysqli_connect('localhost' , 'root' , '' , 'formulaire' )
			or die ('could not connect to database');  // Accès a la base de donnée sinon afficher l'echec de connexion

	if(isset($_POST['mail']) && isset($_POST['mdp'])) // Si le mail et le mot de passe est complété
	   {
	//connexion base de données

	$inputmail 		= $_POST['mail']; // comparer le mail entrée au mail présent dans la base de donnée, suite a l'inscription
	$inputpassword 	= $_POST['mdp']; // comparer le mot de passe entrée au mot de passe  présent dans la base de donnée, suite a l'inscription
	$base_donnee 	= mysqli_connect('localhost' , 'root' , '' , 'formulaire' )
			or die ('could not connect to database');


	$query = "SELECT ID_membre, nomMembre, prenomMembre, emailMembre, passwordMembre FROM membres"; //Selection de ID et des colonnes présente dans les tables

	if ($stmt = mysqli_prepare($base_donnee, $query)){ // Si la base de donnée reconnait nos ID et les colonnes
		mysqli_stmt_execute($stmt); // Il s'éxécute

		mysqli_stmt_bind_result($stmt,$id, $name, $prenom, $mail, $mdp);

		echo('<div class"succes">'); // Afficher la div succes

		while(mysqli_stmt_fetch($stmt)){
			/*echo('<p>ID = ' . $id . ', name = ' . $name . ', prenom = ' . $prenom . ', mail = ' . $mail. ', mdp = ' . $mdp . '</p>');*/
			if ($inputmail == $mail && $inputpassword == $mdp) {  // Si le mail entrée est identique a celui de la base de donnée, et que si le mot de passe correspond aussi
				header('Location: commencerformulaire.php'); // Orienter vers la page commencerformulaire pour ainsi commencer le formulaire en étant conncté
				exit;
			} else {
				echo '<script>alert("Adresse email incorrect ou mot de passe incorrect");</script>'; // Si la connexion à echoué, afficher une alerte en haut de l'écran, prevenant qu'il y a une erreur
			}
		}
	} else {
		echo('<p class="error">Error</p>');
	}
	mysqli_close($base_donnee);
} 











?>
