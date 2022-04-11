<h1><strong>COMPAGNIE OCEANE</strong></h1>
<p class= "plage">
<?php
if ($_SERVER["SCRIPT_FILENAME"] == __FILE__) {
    $racine = "..";
}

include_once "$racine/modele/authentification.php";

include "$racine/vue/bandeau.php";
include "$racine/vue/menu.php";
include "$racine/vue/vuepresentation.php";
include "$racine/vue/pied_page.php";?>
</p>

r('(')