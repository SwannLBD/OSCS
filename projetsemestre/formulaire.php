<?php
	/*CONNEXION*/
require 'include/pdo/pdo.php';



//On initialise des erreurs
$errors = [];


//Hachage password

/*$password = $_POST['password'];
     $hash = password_hash($passwod, PASSWORD_DEFAULT);
     $hashed_password = "$2y$10$BBCpJxgPa8K.iw9ZporxzuW2Lt478RPUV/JFvKRHKzJhIwGhd1tpa";/*

/*CONDITIONS*/
//Si le nomUser est vide
if(empty($_POST['lastname'])) {
    $errors['lastname'] = "votre nom n'est pas valide (Alphanumérique)";
}

//Si le prenomUser est vide, possiblité de rajouté des paramètres pour plus de précision
if(empty($_POST['firstname'])) {
    $errors['firstname'] = "votre prénom n'est pas valide (Alphanumérique)";
}

//Si l'adresse mail est vide,  possiblité de rajouté des paramètres pour plus de précision
if(empty($_POST['email']) ) {
    $errors['email'] = "Votre email n'est pas valide";
}
//Si le mot de passe est vide ou différent l'un à l'autre
if(empty($_POST['password'])) {
    $errors['password'] = "Vous devez rentrer un mot de passe valide";
}



//Si aucune erreur n'et detecté
if(empty($errors)){

	$stmt = $connexion->prepare('INSERT INTO membres (nomMembre, prenomMembre, emailMembre, passwordMembre)
	VALUES (:nomMembre, :prenomMembre, :emailMembre, :passwordMembre )');
	$stmt->bindValue(':nomMembre', $_POST['lastname']);
	$stmt->bindValue(':prenomMembre', $_POST['firstname']);
	$stmt->bindValue(':emailMembre', $_POST['email']);
	$stmt->bindValue(':passwordMembre', $_POST['password']);
	$stmt->execute();

	header('Location: commencerformulaire.php');

}
//Si au moins une erreurs est detecté ont affiche les erreurs
else{

    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}

?>
