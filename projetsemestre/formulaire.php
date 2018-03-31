<?php
	/*CONNEXION*/
require 'include/pdo/pdo.php';



//On initialise des erreurs
$errors = [];


/*CONDITIONS*/
//Si le nomUser est vide
if(empty($_POST['lastname'])) {
    $errors['lastname'] = "votre nom n'est pas valide";
}

//Si le prenomUser est vide, possiblité de rajouté des paramètres pour plus de précision
if(empty($_POST['firstname'])) {
    $errors['firstname'] = "votre prénom n'est pas valide";
}

//Si l'adresse mail est vide,  possiblité de rajouté des paramètres pour plus de précision
if(empty($_POST['email']) ) {
    $errors['email'] = "Votre email n'est pas valide";
}
//Si le mot de passe est vide ou différent l'un à l'autre
if(empty($_POST['password'])) {
    $errors['password'] = "Vous devez rentrer un mot de passe valide";
}

// $sql="SELECT membres FROM formulaire WHERE emailMembre='".$_POST['email']."' ";
// $result=mysql_query($sql);
// //si la requete ne retourne rien, cela signifie que le mail n'existe pas
// if(mysql_num_rows($result) != 0)
// {
// echo 'Ce mail existe deja';
// }
// else
// {
// //traitement
// }

//Si aucune erreur n'et detecté
if(empty($errors)){

  $hashpass=$_POST['password'];
  $hashpass=sha1($hashpass);
  $mail = $_POST['email'];

	$stmt = $connexion->prepare('INSERT INTO membres (nomMembre, prenomMembre, emailMembre, passwordMembre)
	VALUES (:nomMembre, :prenomMembre, :emailMembre, :passwordMembre )');
	$stmt->bindValue(':nomMembre', $_POST['lastname']);
	$stmt->bindValue(':prenomMembre', $_POST['firstname']);
	$stmt->bindValue(':emailMembre', $_POST['email']);
  $stmt->bindValue(':passwordMembre', $hashpass /*$_POST['password']*/ );
	$stmt->execute();

	header('Location: commencer_form.php');

}
//Si au moins une erreurs est detecté ont affiche les erreurs
else{

    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}

?>
