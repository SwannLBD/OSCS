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
  $membre  = $_SESSION['idMembre'];

  $stmt = $connexion -> prepare('INSERT INTO commentaires (commentaire, idEvenement, idMembre) VALUES (:commentaire, :idEvenement, :idMembre)');
  $stmt->bindValue(':commentaire', $_POST['commentaire']);
  $stmt->bindValue(':idEvenement', $evenement);
  $stmt->bindValue(':idMembre', $membre);
  $stmt->execute();
?>

<div class="body_ajout">
  <header>
    <?php include 'include/header.php'; ?>
  </header>
  <div class="main_ajout">
    <div class="center_ajout">
      <div class="comment">
        <p> Merci, votre commentaire a bien été pris en compte ! </p>
      </div>
      <div class="revenir">
        <a href="page_descriptif_soiree.php?id=<?php echo $evenement; ?>"><button class="button_back"> Revenir à mes choix de soirées </button></a>
      </div>
    </div>
  </div>

</div>
<?php include 'include/footer.php';?>
</body>
</html>
