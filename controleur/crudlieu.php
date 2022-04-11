<?php 

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}
//include_once "$racine/modele/bd.lieu.php";
include_once "$racine/modele/bd.lieu.php";
include_once "$racine/modele/bd.crudlieu.php";
include_once "$racine/modele/authentification.php";




// recuperation des donnees GET, POST, et SESSION
;


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$lieu=getlieu();


// traitement si necessaire des donnees recuperees

;

// appel du script de vue qui permet de gerer l'affichage des donnees

$titre = "crud port";
include "$racine/vue/bandeau.php";
include "$racine/vue/menu.php";
include "$racine/vue/crudLieu/vuecrudlieu.php";
include "$racine/vue/pied_page.php";