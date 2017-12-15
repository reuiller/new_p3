<?php 
require 'controler/controler.php';

if (isset($_GET['ordre'])){
	if ($_GET['ordre'] == 'index'){
		goToIndex();
	}
	elseif ($_GET['ordre'] == 'article'){
		if (isset($_GET['id']) && $_GET['id'] > 0) {
			article($_GET['id']);
		}


	}
}	
else {
	goToIndex();
}

//fonction qui va chercher mon paramètre

//Partir sur des switchs 

// Travailler le controleur

//Modèle : sortir les paramètres de la connxion à la BD; Mettre en place un système qui détet si c'ets en ligne.
//ou stocker les idantidiants ?