<?php
					
					

include_once "bd.inc.php";
					
function getbateau(){
					
	try {
		$cnx = connexionPDO();
		$req = $cnx->prepare ("SELECT bateau.* , liaison.id_port, liaison.id_port_arrivee FROM bateau LEFT JOIN traverse ON bateau.id = traverse.idBateau LEFT JOIN liaison ON liaison.id = traverse.idLiaison ORDER BY bateau.id");
		$req->execute();
		$unbateau = $req->fetch(PDO::FETCH_ASSOC);
		while ($unbateau) {
				$resultat[] = $unbateau;
				$unbateau = $req->fetch(PDO::FETCH_ASSOC);
		}
		return $resultat;
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
		    die();
		}	
}






?>