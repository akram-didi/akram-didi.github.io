

<?php
    include_once "bd.inc.php";


if(isset($_POST['add'])){
		$num = $_POST['numero'];
        $date = $_POST['dateDep'];
		$idB = $_POST['idBateau'];
		$idL = $_POST['idLiaison'];
        $cnx = connexionPDO();
		$req = $cnx->prepare('INSERT INTO traverse (numero , dateDep , idBateau , idLiaison ) VALUES (:numero , :dateDep , :idBateau , :idLiaison)');
		$req->bindParam(':numero', $num, PDO::PARAM_INT);
		$req->bindParam(':dateDep', $date, PDO::PARAM_STR);
		$req->bindParam(':idBateau', $idB ,PDO::PARAM_INT);
		$req->bindParam(':idLiaison', $idL, PDO::PARAM_INT);
       
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'traversee ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout dune traversee';
		}
		header('location: index.php?action=crudtraversee');
	}
	
	if(isset($_POST['edit'])){
		$num = $_POST['numero'];
		$date = $_POST['dateDep'];
		$idB = $_POST['idBateau'];
		$idL = $_POST['idLiaison'];
        $cnx = connexionPDO();	
		$req = $cnx->prepare('UPDATE traverse SET dateDep = :dateDep , idBateau = :idBateau , idLiaison = :idLiaison WHERE numero= :numero');
		$req->bindParam(':numero', $num, PDO::PARAM_STR);
        $req->bindParam(':dateDep', $date, PDO::PARAM_STR);
		$req->bindParam(':idBateau', $idB ,PDO::PARAM_INT);
		$req->bindParam(':idLiaison', $idL, PDO::PARAM_INT);
       
		
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'traversee modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification dune traversee';
		}
		header('location: index.php?action=crudtraversee');
	}
	
	if(isset($_POST['supr'])){
		$num = $_POST['numero'];
        $cnx = connexionPDO();
		$req = $cnx->prepare('DELETE FROM traverse WHERE numero = :numero ');
		$req->bindParam(':numero', $num, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'traversee supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression dune traversee';
		}
		header('location: index.php?action=crudtraversee');
	}
?>