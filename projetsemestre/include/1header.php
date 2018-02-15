<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>header</title>
	<script src="javascript/jquery.min.js">
	</script>
	<script type="text/javascript" src="javascript/source.js">
	</script>
	<link rel="stylesheet" href="css/header_style.css" media ="all">

</head>

<body>
<header class="block-header">
		<div class="container">
		<div class="inner">
		<div class="nav-item">
			<div class="logos">
				<img class="logo" src="images_site/logo.png">
				<img class="slogan" src="images_site/logo2.png" alt="slogan">
			</div>
		</div>
			<img id="menu" src="images_site/menu_blanc.svg" alt="menu" onclick="toggle('liste');">
			<!-- Liste cachée visible en format tablette et ordinateur -->
			<div class="nav-item">
			<div class="titre_cache">
				<a href="commencerformulaire.php" class="titre_2">Chercher sa soirée</a>
				<hr class="trait_cache" width="100%" align ="center">
			</div>
			</div>
			<div class="nav-item">
			<div class="menu_cache" onclick="cacher('liste_2');">
				<div class="nom_cache">
					<p class="nom_prenom">Alexandre Pouivet </p>
					<img class="user" src="images_site/user.svg" alt="user" >
				</div>
			</div>
			</div>
			<!-- Fin liste cachée -->
		</div>
		</div>
		<menu class="menu">
		<div class="container">
		<div class="inner">
			<ul id="liste">
				<li class="list">Chercher sa soirée</li>
				<hr class="trait" width="100%" align ="center">
					<ul class="list">Alexandre Pouivet <img class="user" src="images_site/user.svg" alt="user">
					<li class="list">Mon compte</li>
					<li class="list">Se déconnecter</li>
				</ul>
			</ul>	
		</div>
		<!-- Menu déroulant caché -->
		<ul id="liste_2">
			<li class="list_2">Mon compte</li>
			<li class="list_2">Se déconnecter</li>
		</ul>
		<!-- Fin menu déroulant  caché -->
		</div>
	</menu>
	</header>
</body>
</html>