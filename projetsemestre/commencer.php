<?php

	session_start();	//Création d'une session

	$base_donnee 	= mysqli_connect('localhost' , 'root' , '' , 'formulaire' )
			or die ('could not connect to database');  // Accès a la base de donnée sinon afficher l'echec de connexion

//Hachage password
	/* $password = $_POST['password'];
			   $hashed_password = "$2y$10$BBCpJxgPa8K.iw9ZporxzuW2Lt478RPUV/JFvKRHKzJhIwGhd1tpa";
			   password_verify($password, $hashed_password); */


	if(isset($_POST['email']) && isset($_POST['password'])) // Si le mail et le mot de passe est complété
	   {
	//connexion base de données


	$inputmail 		= $_POST['email']; // comparer le mail entrée au mail présent dans la base de donnée, suite a l'inscription
	$inputpassword 	= $_POST['password']; // comparer le mot de passe entrée au mot de passe  présent dans la base de donnée, suite a l'inscription
	$base_donnee 	= mysqli_connect('localhost' , 'root' , 'root' , 'formulaire' )

			or die ('could not connect to database');


	$query = "SELECT ID_membre, nomMembre, prenomMembre, emailMembre, passwordMembre FROM membres"; //Selection de ID et des colonnes présente dans les tables

	if ($stmt = mysqli_prepare($base_donnee, $query)){ // Si la base de donnée reconnait nos ID et les colonnes
		mysqli_stmt_execute($stmt); // Il s'éxécute

	mysqli_stmt_bind_result($stmt,$ID_membre, $nomMembre, $prenomMembre, $emailMembre, $passwordMembre);

		while(mysqli_stmt_fetch($stmt)){
			/*echo('<p>ID = ' . $id . ', name = ' . $name . ', prenom = ' . $prenom . ', mail = ' . $mail. ', mdp = ' . $mdp . '</p>');*/
			if ($inputmail == $emailMembre && $inputpassword == $passwordMembre) {  // Si le mail entrée est identique a celui de la base de donnée, et que si le mot de passe correspond aussi
				header('Location: commencerformulaire.php'); // Orienter vers la page commencerformulaire pour ainsi commencer le formulaire en étant conncté
				exit;
			} else {
				echo '<p>Mot de passe ou adresse email incorrect</p>'; // Si la connexion à echoué, afficher une alerte en haut de l'écran, prevenant qu'il y a une erreur
			}
		}
	} else {
		echo('<p class="error">Error</p>');
	}
	mysqli_close($base_donnee);

}







 /*session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=formulaire', 'root', 'root');
}catch (Exception $e){ // Si erreur
    die('Erreur : ' . $e->getMessage());
}
//On va chercher tous les membres !
$resultats=$connexion->query("SELECT * FROM 'membres'");
//Resultat sous forme d'objet !
$resultats->setFetchMode(PDO::FETCH_OBJ);
//On récupère la ligne des membres !
if( $ligne = $resultats->fetch() ) {
		header ('location: commencerformulaire.php');
}else {
		header('location: se_connecter.php');
} */


?>
