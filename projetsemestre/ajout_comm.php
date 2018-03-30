<?php session_start(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Où sortir ce soir ?</title>
<link rel="icon" href="images_site/icone.png">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include 'include/pdo/pdo.php';
  $evenement = $_GET['id'];
  ?>

<p class="merciAvis"> Merci votre avis à bien était pris en compte</p>

    <?php
    $stmt = $connexion -> prepare('INSERT INTO commentaires (commentaire, idEvenement, idMembre) VALUES (:commentaire, :idEvenement, :idMembre)');
    $stmt->bindValue(':commentaire', $_POST['commentaire']);
    $stmt->bindValue(':idEvenement', $evenement);
    $stmt->bindValue(':idMembre', $membres -> idMembre);
    echo '<br />';
    $stmt->execute();

?>

</body>
</html>
