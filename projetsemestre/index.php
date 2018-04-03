<?php session_start(); ?>
<!doctype html>
<html class="hello">
<head>
<meta charset="UTF-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="page_p_1">

  <video autoplay loop poster="images_site/city.jpg" id="bgvid">
    <source src="images_site/city.mp4" type="video/mp4">
  </video>

    	<div class="container1">
			<div class="inner1">
				<div class="logocl">
					<img class="logo1cl" src="images_site/logo.png">
				</div>
				<div class="buttonfb">
					<a href="https://www.facebook.com/"><button type="button" class="btn-primary" href="">Se connecter avec Facebook</button></a>
				</div>
				<hr class="ligne" width="50%" size="3" color="white" align="center">



			  <form action="commencer.php" method="POST">
				  <div class="form-group">
					<label for="exampleInputEmail1"></label>
					<input type="email" required name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse e-mail">
					<small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				  <div class="form-group1">
					<label for="exampleInputPassword1"></label>
					<input type="password" required name="password" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
				  </div>
				  <button type="submit" name="btnacces" class="btn btn-connection">Se connecter</button>
			</form>
				<div class="inscription">
					<div class="group">
						<div class="pasencoremembre">
							<a>Pas encore membre ?</a>
						</div>
						<div class="inscrire">
							<a href="page_inscription.php"> S'inscrire</a>
						</div>
					</div>
				</div>
			</div>
		</div>

</body>
<?php
include "include/footer_index.php";
?>
</html>
