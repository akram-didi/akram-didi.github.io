<?php

    include_once "bd.inc.php";


if(isset($_POST['add'])){
		$nom = $_POST['nom'];
        $adresse = $_POST['adresse'];
        $code = $_POST['codePostal'];
        $v = $_POST['ville'];
        $idl = $_POST['id_lieu'];
        $cnx = connexionPDO();
		$req = $cnx->prepare('INSERT INTO port (nom , adresse , codePostal, ville , id_lieu) VALUES (:nom , :adresse , :codePostal, :ville ,:id_lieu)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $req->bindParam(':codePostal', $code, PDO::PARAM_INT);
        $req->bindParam(':ville', $v, PDO::PARAM_STR);
        $req->bindParam(':id_lieu', $idl, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'port ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du port';
		}
		header('location: index.php?action=crudport');
	}
	
	if(isset($_POST['edit'])){
		$idP = $_POST['id'];
		$nom = $_POST['nom'];
		$adresse = $_POST['adresse'];
        $code = $_POST['codePostal'];
        $v = $_POST['ville'];
        $idl = $_POST['id_lieu'];	
        $cnx = connexionPDO();	
		$req = $cnx->prepare('UPDATE port SET nom = :nom , adresse = :adresse , codePostal = :codePostal , ville = :ville , id_lieu = :id_lieu WHERE id = :id');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':id', $idP, PDO::PARAM_INT);
		$req->bindParam(':adresse', $adresse, PDO::PARAM_STR);
        $req->bindParam(':codePostal', $code, PDO::PARAM_INT);
        $req->bindParam(':ville', $v, PDO::PARAM_STR);
        $req->bindParam(':id_lieu', $idl, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'port modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du port';
		}
		header('location: index.php?action=crudport');
	}
	
	if(isset($_POST['supr'])){
		$idP = $_POST['id'];
        $cnx = connexionPDO();
		$req = $cnx->prepare('DELETE FROM port WHERE id = :id ');
		$req->bindParam(':id', $idP, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'port supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du port';
		}
		header('location: index.php?action=crudport');
	}
?>