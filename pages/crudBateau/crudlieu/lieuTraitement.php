<?php session_start();
	include_once('BDD/connectBdd.php');

	if(isset($_POST['add'])){
		$nom = $_POST['nom'];
        $info = $_POST['informations'];
        $ile = $_POST['ile'];
		$req = $connexion->prepare('INSERT INTO lieu (nom , informations , ile ) VALUES (:nom , :informations , :ile)');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':informations', $info, PDO::PARAM_STR);
        $req->bindParam(':ile', $ile, PDO::PARAM_STR);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION["success"] = 'ile ajouté';
		}
		else{
			$_SESSION["error"] = 'Problème lors de l\'ajout du lieu';
		}
		header('location: index.php?action=modifielieu');
	}
	
	if(isset($_POST['edit'])){
		$idL = $_POST['id'];
		$nom = $_POST['nom'];		
		$req = $connexion->prepare('UPDATE lieu SET nom = :nom WHERE id = :id');
		$req->bindParam(':nom', $nom, PDO::PARAM_STR);
		$req->bindParam(':id', $idL, PDO::PARAM_INT);
		$resultat = $req->execute();

		if($resultat){
			$_SESSION['success'] = 'lieu modifié';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la modification du lieu';
		}
		header('location: index.php?action=modifielieu');
	}
	
	if(isset($_POST['supr'])){
		$idL = $_POST['id'];
		$req = $connexion->prepare('DELETE FROM lieu WHERE id = :id ');
		$req->bindParam(':id', $idL, PDO::PARAM_INT);
		$resultat = $req->execute();
		if($resultat){
			$_SESSION['success'] = 'lieu supprimé';
		}		
		else{
			$_SESSION['error'] = 'Problème lors de la suppression du lieu';
		}
		header('location: index.php?action=modifielieu');
	}
?>