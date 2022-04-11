<?php 

if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/bd.bateau.php";
include_once "$racine/modele/bd.port.php";
include_once "$racine/modele/bd.secteur.php";
include_once "$racine/modele/authentification.php";

// recuperation des donnees GET, POST, et SESSION
;


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$bateau = getbateau();
$port = getport();
$secteur=getsecteur();


// traitement si necessaire des donnees recuperees
;

// appel du script de vue qui permet de gerer l'affichage des donnees

$titre = "Liste des bateaux";
include "$racine/vue/bandeau.php";
include "$racine/vue/menu.php";
include "$racine/vue/vueport.php";
include "$racine/vue/pied_page.php";
 