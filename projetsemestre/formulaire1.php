<?php
	session_start();

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">


</head>

<body class="body_formulaire">
  <?php
    //Script connexion à la base de données
    include('include/pdo/pdo.php');

    //Requête pour la table question
    $idQuestion = 1;
    $query = "SELECT * FROM question WHERE idQuestion=:id LIMIT 0,1";
    $statementQuestion = $connexion->prepare($query);
    $statementQuestion -> bindValue(':id', $idQuestion);
    $statementQuestion -> execute();


    //Passage à la question suivante
    if ($idQuestion == 1) {
      echo "<form method='get' action='formulaire2.php'>";


    //Si erreur, redirection vers début du formulaire
    } else {
      echo "Erreur, pour revenir au début du formulaire, <a href='commencerformulaire.php'>cliquez-ici</a>";
    }
  ?>


	<div class="container_formulaire">
		<div class="inner">
			<div class="logo_formulaire">
				<a href="commencerformulaire.php"><img class="logo" src="images_site/logo.png"></a>
			</div>
			<div class="questions">
				<h1 class="question">#Question 1</h1>
			</div>
			<div class="question-ecrite">
				<p class="question-form">
        <?php  while ($question = $statementQuestion -> fetch()) {
          echo $question -> texteQuestion; ?></p>
			</div>
			<div class="block-reponse">
				<form method="get" id="rep" class="reponse1" >
					<div class="ligne"> <?php

          //Requête pour la table réponse
          $query = "SELECT * FROM reponse WHERE idQuestion=:id";
          $statementReponse = $connexion->prepare($query);
          $statementReponse -> bindValue(':id', $idQuestion);
          $statementReponse -> execute();


          //Affichage des réponses correspondantes
          $i=0;
          while ($reponse = $statementReponse -> fetch()) {
            $i++;
            echo "<div class='check'>
						<input id='reponse".$i."' class='form_check_input' name='reponse1' type='radio' value ='".$reponse -> idReponse."'required><label for='reponse".$i."'>".$reponse -> texteReponse."</label><br />
						</div>";
						}
          }?>
					</div >
				</form>
				<input class="btn btn-connection_p_3" name="submit" type="submit" value="Valider">
			</div>

		</div>
	</div>
<!-- FOOTER -->
<?php
	include "include/footer.php";
?>
</body>
</html>
