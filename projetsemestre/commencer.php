<?php
session_start();
$hashpass=$_POST['password'];
$hashpass=sha1($hashpass);
$mail = $_POST['email'];

$connexionStr = new PDO('mysql:host=localhost;dbname=formulaire', 'root', 'root');
//echo ('Query = ' . 'SELECT ID_membre FROM membres WHERE emailMembre="' .$mail.'" AND passwordMembre="'.$hashpass.'"');
$req = $connexionStr->prepare('SELECT ID_membre FROM membres WHERE emailMembre="' .$mail.'" AND passwordMembre="'.$hashpass.'"');
$req->execute();
$resultat = $req->fetch();

if (!$resultat) {
	header('Location: indexerror.php');
}else {
	if (!isset($_SESSION['ID_membre']) AND $_SESSION['ID_membre'] = $resultat['ID_membre'] ) {
		$_SESSION['id'] = $resultat[0];
		header('Location: commencer_form.php');
		//echo $_SESSION['id'];
	}
	else {
		header('Location: indexerror.php');
	}
}
 ?>
