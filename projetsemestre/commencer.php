<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>je_commence</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="page2">
    	
	<?php
	
	/*print_r($_POST);*/   //Afficher le contenu d'un tableau php

	session_start();	//Création d'une session 

	$base_donnee 	= mysqli_connect('localhost' , 'root' , '' , 'formulaire' )
			or die ('could not connect to database');  // Accès a la base de donnée sinon afficher l'echec de connexion 
	
	if(isset($_POST['mail']) && isset($_POST['mdp'])) // Si le mail et le mot de passe est complété 
	   {
	//connexion base de données 
	
	$inputmail 		= $_POST['mail']; // comparer le mail entrée au mail présent dans la base de donnée, suite a l'inscription  
	$inputpassword 	= $_POST['mdp']; // comparer le mot de passe entrée au mot de passe  présent dans la base de donnée, suite a l'inscription  
	$base_donnee 	= mysqli_connect('localhost' , 'swann' , 'MDS' , 'formulaire' )
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
		   
		   
		   
	
	/*$connexion_mail = mysqli_real_escape_string( $base_donnee, htmlspecialchars($_POST['mail']));
	$connexion_password = mysqli_real_escape_string($base_donnee, htmlspecialchars($_POST['mdp']));
	
	if($connexion_mail !== "" && $connexion_password !== "") {
		$requete = "SELECT count(*) FROM membres where
			emailMembre = '".$connexion_mail. "' and passwordMembre ='".$connexion_password."' ";
		echo($requete);
		$exec_requete = (mysqli_query($base_donnee, $requete));
		//$count = $exec_requete['count(*)'];
		echo($exec_requete);
		if($count!=0) { //nom utilisateur et mot de passe correcte
			$_SESSION['email']=$connexion_mail;
		header('Location : commencerformulaire.php');
		} else if( $connexion_mail !== $mail) {
			echo '<script>alert("Adresse email incorrect");</script>';// utilisateur ou mot de passe incorrect
		}
		else if ($connexion_password !== $password) {
        	echo '<script>alert("Mot de passe incorrect");</script>';
        }
		}
		}
else {
	echo('les variables email et password ne sont pas défini');
	//header('Location: commencerformulaire.php');
	}
		
mysqli_close($base_donnee);		*/
	
	
	
	
	
	
	
	
		/*
		session_start();
		$erreur = false;
		$msg_erreur = '';
		$msg = 'Bienvenue ';

		function afficheFormulaire() {
			echo '
				  <form action="je_commence.php" method="post">
					  <div class="form-group">
						<label for="exampleInputEmail1"></label>
						<input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse e-mail">
						<small id="emailHelp" class="form-text text-muted"></small>
					  </div>
					  <div class="form-group1">
						<label for="exampleInputPassword1"></label>
						<input type="password" name="mdp" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
					  </div>
					  <div class="form-check">
						<label class="form-check-label">
						<input type="checkbox" class="form-check-input">Se souvenir</label>
					  </div>
					  <button type="submit" class="btn btn-connection">Se connecter</button>
				</form>          

			';
	}

	if(isset($_POST['mdp'])) { //pour vérifier qu'un formulaire a été saisi
		$mail = $_POST['mail'];
		$mdp = $_POST['mdp'];
	} else {
		$erreur = true;
		$msg_erreur = 'Veuillez saisir votre adresse mail et votre mot de passe';
	}

	if (!$erreur) {
        if (!empty($mail)) {
            $msg .= $mail;
            $msg .= "<a> cliquez ici</a> pour accèder à votre profil.</p>";

        } else {
            $erreur=true;
            $msg_erreur = '<p class="msgerreur1">Adresse e-mail incorrect <br> Veuillez réessayer </p>';
        }
    
	}
    if (!$erreur) {
        if ($mdp=='MDS') {
            $msg .= 
				
		'<div class="container1">
			<div class="inner1">
				<div class="logocl">
					<a href="http://localhost/projetsemestre/se_connecter.php"><img class="logo1_2" src="../ressource/image/logo.png"></a>
				</div>
				<div class= "slogan">
					<h1 class="titre_sl"> Trouvez enfin votre soirée sur <br> Où Sortir Ce Soir</h1>
				</div>
				<a href="http://localhost/projetsemestre/formulaire1.php">
				<button type="submit" class="btn btn-connection_2">Je commence</button> </a>
			</div>
		</div>
	 
	<footer class="block-footer">
    	<div class="info1">
			<p class= "col-2">Mentions légales</p>
		</div>
		<div class="info2">
			<p class= "col-6">Politique de confidentialité</p>
		</div>	
		<div class="info3">
			<p class= "col-2">Conditions générales</p> 
    	</div>
 	</footer>';	
			$_SESSION['mail']=$mail;
        } else {
            $erreur=true;
            $msg_erreur = ' <p class="msgerreur"> Mot de passe incorrect <br> Veuillez réessayer </p>';
        }
    }
	

	if (!$erreur) {
		echo $msg;
	} else {
		echo $msg_erreur;
       	'<div class="container1">
			<div class="inner1">
				<div class="logocl">
					<a href="http://localhost/projetsemestre/se_connecter.php"><img class="logo1_2" src="../ressource/image/logo.png"></a>
				</div>
				<div class= "slogan">
					<h1 class="titre_sl> Trouvez enfin votre soirée sur <br> Où Sortir Ce Soir</h1>
				</div>
				<a href="http://localhost/projetsemestre/formulaire1.php"><button type="submit" class="btn btn-connection_2">Je commence</button></a>
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
  </footer>	';

	}*/


	?>
</body>
</html>
