<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">

</head>

<body class="body_inscription">

	<video autoplay loop poster="images_site/ciel.jpg" id="bgvid">
    <source src="images_site/ciel.mp4" type="video/mp4">
  </video>

<?php
require('include/pdo/pdo.php');
//session_start();
?>

<main class="block-main">
	<div class="container_inscription">
	<div class="inner">
		<div class="logos_inscription">
			<a href="page_resultats.php">
			<img class="logo" src="images_site/logo.png" alt="logo">
			</a>
			<h1> Mes informations </h1>
			<hr class="souligne" color="white" width="25%" align ="center">
		</div>
		<div class="formulaire">
			<?php
			$connexionStr=new PDO("mysql:host=localhost;dbname=formulaire;charset=utf8",'root','');
			$membres = $connexionStr->query("SELECT * FROM membres WHERE ID_membre=" . $_SESSION['id']);
			while ($donnees = $membres -> fetch()) {
			?>
			<form action="php_modif.php" id="form" method="post">    <!-- method "post"(+sure) ou "get"(-sure) -->
				<div class="nom_prenom">
				<p>
					<input type="text" required name="lastname" id="lastname" class="form" placeholder="<?php echo $donnees['nomMembre']; ?>" maxlength="15">
				</p>
				<p>
					<input type="text" required name="firstname" class="form" id="firstname" placeholder="<?php echo $donnees['prenomMembre']; ?>" maxlength="15">
				</p>
				</div>
				<div class="mail_password">
				<p>
					<input type="email" required name="email" class="form" id="email" placeholder="<?php echo $donnees['emailMembre']; ?>" max-length="40">
				</p>
				<p>
					<input type="password" required name="password" class="form" id="password" placeholder="Votre nouveau mot de passe" maxlength="15" >
				</p>
				</div>
				<div class="btn_inscript">
					<button type="submit" name="btn_inscript" class="bouton_inscrire"> Enregistrer mes informations </button>
				</div>
			</form>
		</div>
	</div>
	</div>
</main>
<!-- FOOTER -->
<?php
	}
	$membres->closeCursor();
	include "include/footer_index.php";

?>
</body>


</html>
