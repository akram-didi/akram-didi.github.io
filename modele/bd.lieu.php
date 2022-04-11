<?php
					
include_once "bd.inc.php";
					
function getlieu(){
					
	try {
		$cnx = connexionPDO();
		$req = $cnx->prepare ("SELECT * FROM lieu");
		$req->execute();
		$unlieu = $req->fetch(PDO::FETCH_ASSOC);
		while ($unlieu) {
				$resultat[] = $unlieu;
				$unlieu = $req->fetch(PDO::FETCH_ASSOC);
		}
		return $resultat;
		} catch (PDOException $e) {
			print "Erreur !: " . $e->getMessage();
		    die();
		}	
}