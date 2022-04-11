<?php
					
					

include_once "bd.inc.php";
					
function getport(){
					
	try {
		$cnx = connexionPDO();
		$req = $cnx->prepare ("SELECT * FROM port");
		$req->execute();
		$unport = $req->fetch(PDO::FETCH_ASSOC);
		while ($unport) {
				$resultat[] = $unport;
				$unport = $req->fetch(PDO::FETCH_ASSOC);
		}
		return $resultat;
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
		    die();
		}	
}