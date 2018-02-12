// JavaScript Document

// fonctions pour menu version mobile

	function Hide (addr) { document.getElementById(addr).style.visibility = "hidden";	} // fonction pour rendre le menu invisible

	function Show (addr) { document.getElementById(addr).style.visibility = "visible";	} // fonction pour rendre le menu visible

	function toggle(anId){ // fonction "switch" entre visible et invisible avec toogle(anId) quand on clique dessus

		if (document.getElementById(anId).style.visibility == "hidden")	{	// Si invisible rendre visible
			Show(anId);	
		} else {	// Si visible rendre invisible
			Hide(anId);	}
		}

	window.onload = function () { Hide('liste');	}; // Je fais appel à la fonction invisible au chargement de la page

// fonctions pour menu versions tablette et ordinateur 

function Hide_liste (addr) { document.getElementById(addr).style.visibility = "hidden";	}

function Show_liste (addr) { document.getElementById(addr).style.visibility = "visible";	}

function cacher(anId){
			
	if (document.getElementById(anId).style.visibility == "hidden")	{	
		Show_liste(anId);	
	} else {	
		Hide_liste(anId);	}
	}

	