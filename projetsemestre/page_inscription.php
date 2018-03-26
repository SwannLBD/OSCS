<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="body_inscription">

<main class="block-main">
	<div class="container_inscription">
	<div class="inner">
		<div class="logos_inscription">
			<a href="index.php" ><img class="logo" src="images_site/logo.png" alt="logo"></a>
			<h1> Inscription </h1>
			<hr class="souligne" color="white" width="25%" align ="center">
		</div>
		<div class="formulaire">
			<form action="formulaire.php" id="form" method="post">    <!-- method "post"(+sure) ou "get"(-sure) -->
				<div class="nom_prenom">
				<p>
					<input type="text" required name="lastname" id="lastname" class="form" placeholder="Nom" maxlength="15">
				</p>
				<p>
					<input type="text" required name="firstname" class="form" id="firstname" placeholder="Prénom" maxlength="15">
				</p>
				</div>
				<div class="mail_password">
				<p>
					<input type="email" required name="email" class="form" id="email" placeholder="e-mail" max-length="40">
				</p>
				<p>
					<input type="password" required name="password" class="form" id="password" placeholder="mot de passe" maxlength="15" >
				</p>
				</div>
				<div class="btn_inscript">
					<button type="submit" name="btn_inscript" class="bouton_inscrire"> S'inscrire </button>
				</div>
			</form>
		</div>
	</div>
	</div>
</main>
<!-- FOOTER -->
<?php
	include "include/footer.php";
?>
</body>


</html>
