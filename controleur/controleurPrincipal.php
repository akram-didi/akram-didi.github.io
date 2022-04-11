<?php

function controleurPrincipal($action){
    $lesActions = array();
    $lesActions["presentation"] = "bateau.php";
    $lesActions["affichePorts"] = "bateau.php";
   
    $lesActions["crudbateau"] = "crudbateau.php";
    
    $lesActions["crudport"] = "crudport.php";
    $lesActions["crudliaison"] = "crudliaison.php";
    $lesActions["crudlieu"] = "crudlieu.php";
    $lesActions["modification"] = "controleurmodification.php";
    $lesActions["profil"] = "monProfil.php";
    $lesActions["connexion"] = "connexion.php";
    $lesActions["deconnexion"] = "deconnexion.php";
    $lesActions["crudtraversee"] = "crudtraversee.php";
    $lesActions["crudcategorie"] = "crudcategorie.php";
    $lesActions["presentation"] = "presentation.php";
    
    if (array_key_exists ( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["presentation"];
    }

}

?>