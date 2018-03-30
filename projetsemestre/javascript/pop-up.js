// JavaScript Document
console.log ('script');

function showComment(){
	$("#pop-up").before('<div id="overlay"></div>');

	$("#overlay").css('opacity', 0).fadeTo(300, 0.5, function () { $("#pop-up").fadeIn(500); });
}

function Overlay() {
	// on fait disparaître le gris de fond rapidement
     $("#overlay").fadeOut('fast', function () { $(this).remove() });

     // on fait disparaître le popup à la même vitesse
     $("#pop-up").fadeOut('fast', function () { $(this).hide() });

}

function connect(){
	var mail = document.getElementById('email');
	var password = document.getElementById('password');
	var text = document.getElementById('text_connect');

	if( mail.value=="" || password.value == ""){
		text.style.opacity=1;
	} else {
		console.log('Connect to account');
		sendQuery('connexion.php?email='+ mail.value + '&password='+ password.value);
		setTimeout(function(){
			window.location.href = "http://localhost/athome/account.php";
		}, 200);

	}

}



function sendQuery(query){
    console.log('Function sendQuery');
    console.log("query : " + query);

    //instance de l'objet
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange=function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("ShowMessage response = ");
            console.log(this.responseText);
        }
    };

    xhttp.open("GET",query , true);
    xhttp.send();
}
