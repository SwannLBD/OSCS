<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>se_connecter.html</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="page_p_1">


    	<div class="container1">
			<div class="inner1">
				<div class="logocl">
					<img class="logo1cl" src="../ressource/image/logo.png">
					<img class="logo2cl" src="../ressource/image/logo2.png">
				</div>
				<div class="buttonfb">
					<a href="https://www.facebook.com/login.php?skip_api_login=1&api_key=174829003346&signed_next=1&next=https%3A%2F%2Fwww.facebook.com%2Fv2.3%2Fdialog%2Foauth%3Fredirect_uri%3Dhttps%253A%252F%252Faccounts.spotify.com%252Fapi%252Ffacebook%252Foauth%252Faccess_token%26state%3DAQBCH6HczrQ1Yb17h9m3g0l0nD-nqSpV2e4gT7j-awMcQm2STsxmOGcc_W6zakwA3nPJVaIAA_L8WUIZTkw%26client_id%3D174829003346%26ret%3Dlogin%26logger_id%3D534ea7f8-eb12-10a6-d0c8-935c7105de60&cancel_url=https%3A%2F%2Faccounts.spotify.com%2Fapi%2Ffacebook%2Foauth%2Faccess_token%3Ferror%3Daccess_denied%26error_code%3D200%26error_description%3DPermissions%2Berror%26error_reason%3Duser_denied%26state%3DAQBCH6HczrQ1Yb17h9m3g0l0nD-nqSpV2e4gT7j-awMcQm2STsxmOGcc_W6zakwA3nPJVaIAA_L8WUIZTkw%23_%3D_&display=page&locale=fr_FR&logger_id=534ea7f8-eb12-10a6-d0c8-935c7105de60"><button type="button" class="btn btn-primary" href="">Se connecter avec Facebook</button></a>
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
		<footer class="block-footer">
					<div class="info1">
						<p>Mentions légales</p>
					</div>
					<div class="info2">
						<p>Politique de confidentialité</p>
					</div>
					<div class="info3">
						<p>Conditions générales</p>
					</div>
		  </footer>




</body>
</html>
