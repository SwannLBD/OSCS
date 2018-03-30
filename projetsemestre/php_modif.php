<?php
session_start();

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




//Si aucune erreur n'et detecté
if(empty($errors)){

  //Modifications du nom, prénom et adresse mail
  $stmt = $connexion->prepare("UPDATE membres SET nomMembre =\"" .$_POST['lastname'] . "\", prenomMembre =\"" .$_POST['firstname'] . "\", emailMembre =\"" .$_POST['email'] . "\" WHERE ID_membre =" .$_SESSION['id']);
  //var_dump($stmt);

  //Modification du mot de passe avec hashage
  $hashpass=$_POST['password'];
  $hashpass=sha1($hashpass);

  $stmt = $connexion->prepare("UPDATE membres SET  passwordMembre='".$hashpass."' WHERE ID_membre =" .$_SESSION['id']);




  $stmt->execute();

  header('Location: page_resultats.php');

}
//Si au moins une erreurs est detecté ont affiche les erreurs
else{

    echo "<pre>";
    print_r($errors);
    echo "</pre>";
}

?>
