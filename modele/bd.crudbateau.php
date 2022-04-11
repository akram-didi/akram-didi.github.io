<?php

    include_once "bd.inc.php";


    if(isset($_POST['add'])){
        
        $nom = $_POST['nom'];
        $longueur = $_POST['longueur'];
        $largeur = $_POST['largeur'];
        $vitesse = $_POST['vitesse'];
        $nbPassager = $_POST['nbPassager'];
        $nbVehicule = $_POST['nbVehicule'];
        
        $cnx = connexionPDO();
        $req = $cnx->prepare('INSERT INTO bateau (nom , longueur , largeur , vitesse , nbPassager , nbVehicule) VALUES (:nom , :longueur , :largeur , :vitesse , :nbPassager , :nbVehicule)');

        $req->bindParam(':nom', $nom, PDO::PARAM_STR);
        $req->bindParam(':longueur', $longueur, PDO::PARAM_INT);
        $req->bindParam(':largeur', $largeur, PDO::PARAM_INT);
        $req->bindParam(':vitesse', $vitesse, PDO::PARAM_INT);
        $req->bindParam(':nbPassager', $nbPassager, PDO::PARAM_INT);
        $req->bindParam(':nbVehicule', $nbVehicule, PDO::PARAM_INT);
        

        $resultat = $req->execute();

        if($resultat){

            $_SESSION["success"] = 'Bateau ajouté';

        }

        else{

            $_SESSION["error"] = 'Problème lors de l\'ajout du bateau';

        }

        header('location: index.php?action=modification');

    }


    if(isset($_POST['edit'])){

        $id = $_POST['id'];

        $nom = $_POST['nom'];
        $longueur = $_POST['longueur'];
        $largeur = $_POST['largeur'];
        $vitesse = $_POST['vitesse'];
        $nbPassager = $_POST['nbPassager'];
        $nbVehicule = $_POST['nbVehicule'];      
        
        $cnx = connexionPDO();
        $req = $cnx->prepare('UPDATE bateau SET nom = :nom , longueur = :longueur , largeur = :largeur , vitesse = :vitesse , nbPassager = :nbPassager , nbVehicule = :nbVehicule  WHERE id = :id');

        $req->bindParam(':nom', $nom, PDO::PARAM_STR);

        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->bindParam(':longueur', $longueur, PDO::PARAM_INT);
        $req->bindParam(':largeur', $largeur, PDO::PARAM_INT);
        $req->bindParam(':vitesse', $vitesse, PDO::PARAM_INT);
        $req->bindParam(':nbPassager', $nbPassager, PDO::PARAM_INT);
        $req->bindParam(':nbVehicule', $nbVehicule, PDO::PARAM_INT);

        $resultat = $req->execute();


        if($resultat){

            $_SESSION['success'] = 'Bateau modifié';

        }      

        else{

            $_SESSION['error'] = 'Problème lors de la modification du bateau';

        }

        header('location: index.php?action=modification');

    }

    if(isset($_POST['supr'])){

        $id = $_POST['id'];
        
        $cnx = connexionPDO();

        //$req = $cnx->prepare('DELETE FROM traverse WHERE idBateau  = :idBateau');
        //$req = $cnx->prepare('DELETE FROM utiliser WHERE id_bateau = :id_bateau');
        //$req = $cnx->prepare('DELETE FROM liaison WHERE id_port = id_port');
        //$req = $cnx->prepare('DELETE FROM liaison WHERE id_port_arrivee = :id_port_arrivee');
        //$req = $cnx->prepare('DELETE FROM Apartient WHERE idBateau = :idBateau');
        $req = $cnx->prepare('DELETE FROM bateau WHERE id = :id  ');
       
       
        $req->bindParam(':id', $id, PDO::PARAM_INT);

        $resultat = $req->execute();

        if($resultat){

            $_SESSION['success'] = 'Bateau supprimé';

        }      

        else{

            $_SESSION['error'] = 'Problème lors de la suppression du bateau';

        }

        header('location: index.php?action=modification');

    }

?>