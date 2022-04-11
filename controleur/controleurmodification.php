
<?php
$titre = "crud ";
include "$racine/vue/bandeau.php";
include "$racine/vue/menu.php";

include "$racine/vue/pied_page.php";
include "$racine/modele/bd.crudbateau.php";
include "$racine/modele/bd.crudport.php";
include "$racine/modele/bd.crudliaison.php";
include "$racine/modele/bd.crudlieu.php";

include "$racine/modele/bd.crudtraversee.php";
include "$racine/modele/bd.crudcategorie.php";


?>