<?php

    include_once "bd.inc.php";


if(isset($_POST['add'])){
		$id = $_POST['id'];
        $libelle = $_POST['libelle'];
        
        $cnx = connexionPDO();
		$req = $cnx->prepare('INSERT INTO categorie (id , libelle) VALUES (:id , :libelle)');
		$req->bindParam(':id', $id, PDO::PARAM_STR);
        $req->bindParam(':libelle', $libelle, PDO::PARAM_STR);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'port ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du port';
		}
		header('location: index.php?action=crudcategorie');
	}
	
	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$libelle = $_POST['libelle'];	
        $cnx = connexionPDO();	
		$req = $cnx->prepare('UPDATE categorie SET libelle = :libelle WHERE id = :id');
		$req->bindParam(':id', $id, PDO::PARAM_STR);
		$req->bindParam(':libelle', $libelle, PDO::PARAM_STR);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'port modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du port';
		}
		header('location: index.php?action=crudcategorie');
	}
	
	if(isset($_POST['supr'])){
		$id = $_POST['id'];
        $cnx = connexionPDO();
		$req = $cnx->prepare('DELETE FROM categorie WHERE id = :id ');
		$req->bindParam(':id', $id, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'port supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du port';
		}
		header('location: index.php?action=crudcategorie');
	}
?>