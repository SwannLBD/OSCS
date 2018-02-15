<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>formulaire1</title>
    <link rel="stylesheet" href="css/style.css">



    <script type="text/javascript">                  // JAVASCRIPT

		function gBox(form_check_input){  // Cibler la div form_check_input
    var tabcheck = document.getElementsByClassName('form_check_input');
			var formchecked = false; // Cette fonction vérifie qu'une case au minimum a été cocher avant de passer au formulaire suivant
			for (i=0; i<tabcheck.length;i++){
				tabcheck[i].checked;
				if (tabcheck[i].checked){ // Si une case a été cocher
					formchecked = true;
				}
			}

		if(formchecked){  // Si une case a été cocher
        document.location.href="http://localhost/projetsemestre/formulaire2.php".submit(); // Renvoyer vers la page formulaire 2 si la personne appuie sur le bouton continuer avec au moins une case coché
    }

    else{ //Sinon afficher un message d'alerte pour demander de faire un choix
        alert('Veuillez cocher une case');
    }
}

	</script>

</head>

<body class="page3">

	<div class="container1">
		<div class="inner1">
			<div class="logocl">
				<a href="http://localhost/projetsemestre/se_connecter.php"><img class="logo1cl" src="../ressource/image/logo.png"></a>
			</div>
			<div class="question1">
				<h1 class="q1">#Question 1</h1>
			</div>
			<div class="question-ecrite">
				<p class="question-form"> Quel type d'activité souhaitez-vous réaliser ? </p>
			</div>
			<div class="block-reponse">
				<form method="post" id="rep" class="reponsel1" >
					<div class="ligne">
						<input type="checkbox" class="form_check_input">  Bar
						<input type="checkbox" class="form_check_input">  Théatre
					</div >
					<div class="ligne">
						<input type="checkbox" class="form_check_input">  Concert
						<input type="checkbox" class="form_check_input">  Les quatres
					</div>
				</form>
				<div class="btn-suivant">
					<a href="formulaire2.php"><button type="submit" class="btn btn-connection_p_3" onClick="gBox('form-check-input'); return false;">Suivant</button></a>
				</div>
			</div>

		</div>
	</div>
<!-- FOOTER -->
<?php
	include "include/footer.php";
?>
</body>
</html>
