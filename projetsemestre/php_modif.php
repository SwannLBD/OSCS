<?php

session_start();
$hashpass=$_POST['password'];
$hashpass=sha1($hashpass);
$mail = $_POST['email'];

$connexionStr = new PDO('mysql:host=localhost;dbname=formulaire', 'root', 'root');
$req = $connexionStr->prepare('UPDATE membres SET nomMembre = '$_POST['lastname']', prenomMembre = '$_POST['firstname']', emailMembre = '$_POST['email']' WHERE id = '$_SESSION['id']'');
$req->execute();
$modif = $req->fetch();

if(!$modif) {
  echo "Impossible de modifier vos informations";
} else {

}




 ?>
