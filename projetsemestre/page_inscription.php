<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page inscription</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body class="body_inscription">
	
<main class="block-main">
	<div class="container_inscription">
	<div class="inner">
	<div class="logos_inscription">
		<img class="logo" src="../ressource/image/logo.png" alt="logo">
		<h1> Inscription </h1>
		<hr class="souligne" color="white" width="60%" align ="center">
	</div>
	<div class="formulaire">
		<form action="formulaire.php" method="post">    <!-- method "post"(+sure) ou "get"(-sure) -->
			<div class="nom_prenom">
			<p>
				<input type="text" required name="firstname" class="form" id="firstname" placeholder="Prénom" maxlength="15">
			</p>
			<p>
				<input type="text" required name="lastname" id="lastname" class="form"placeholder="Nom" maxlength="15">
			</p>
			</div>
			<p>
				<input type="email" required name="email" class="form" id="email" placeholder="e-mail" max-length="40">
			</p>
			<p>
				<input type="password" required name="password" class="form" id="password" placeholder="mot de passe" maxlength="15" >
			</p>
			<button type="submit" class="bouton_inscrire"> S'inscrire </button>
		</form>
	</div>
	</div>
	</div>	
</main>	
<?php
	
include "include/footer.php";
	
?>	
</body>
</html>