<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>formulaire2</title>
    <link rel="stylesheet" href="css/style.css">
    
      <script type="text/javascript">
 
		function gBox(form_check_input){
    var tabcheck = document.getElementsByClassName('form_check_input');
			var formchecked = false;
			for (i=0; i<tabcheck.length;i++){
				tabcheck[i].checked;
				if (tabcheck[i].checked){
					formchecked = true;
				}
			}
		
		if(formchecked){
        document.location.href="http://localhost/projetsemestre/formulaire2.php".submit();
    }
	
    else{
        alert('Veuillez cocher une case');
    }
}
		
	</script>
    
</head>

<body class="page3">
	
	<div class="container1">
		<div class="inner1">
			<div class="logocl">
				<a href="http://localhost/projetsemestre/se_connecter.php"><img class="logo1cl" src="../ressource/image/logo.png"> </a>
			</div>
			<div class="question1">
				<h1 class="q1">#Question 2</h1>
			</div>
			<div class="question-ecrite">
				<p class="question-form"> Haut peregrini extrusis quique indignitatis  paucis milia ita milia ?</p>
			</div>
			<div class="block-reponse">
				<form method="post" id="rep" class="reponsel1">
					<div class="ligne">
						<input type="checkbox" class="form_check_input">  Choix question 1
						<input type="checkbox" class="form_check_input">  Choix question 2
					</div >
					<div class="ligne">
						<input type="checkbox" class="form_check_input">  Choix question 3
						<input type="checkbox" class="form_check_input">  Choix question 4
					</div>	
				</form>
			</div>
			<div class="btn-nav">
			<a href="http://localhost/projetsemestre/formulaire1.php"><button type="submit" class="btn btn-connection_p_4_1" >Précedent</button></a>
			<a href="formulaire3.php"><button type="submit" class="btn btn-connection_p_4_2" onClick="gBox('form-check-input'); return false;" >Suivant</button>
			</div></a>
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
