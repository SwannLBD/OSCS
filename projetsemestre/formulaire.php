<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans titre</title>
</head>

<body>
	<?php

	// On récupère les POST pour en faire des variables

	$prenom = $_POST['firstname'];
	$nom = $_POST['lastname'];
	$mail = $_POST['email'];
	$password = $_POST['password'];

	// connection au serveur

	$link = mysqli_connect("localhost", "root", "root", "formulaire");

if (!$link) { // Si le lien entre la connexion et la base de donnée, un affichage des erreurs apparait
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

/* echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
echo"</p>";*/

$sql2 = "INSERT INTO membres (nomMembre, prenomMembre, emailMembre, passwordMembre)
VALUES ('" .$nom ."', '" .$prenom ."', '" .$mail ."', '" .$password ."')"; /* On lie la base de donnée avec les variables pour récupérer les valeurs et ainsi créer la base de donnée */

/*echo ('Query SQL = ' . $sql2);*/

if (mysqli_query($link, $sql2)) {
	 header ('Location: commencerformulaire.php'); // Si l'inscription à bien été faite, on redirige vers la page commencerformulaire
}else {
	echo "Error: " . $sql2 . "<br>" . mysqli_error($link); // Si il y a des erreurs, la page affiche un message d'erreur
	// A compléter pour afficher si il y a des oublis ou des erreurs
}
	?>
</body>
</html>
