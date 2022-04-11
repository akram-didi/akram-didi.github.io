<?php

    include_once "bd.inc.php";


    if(isset($_POST['add'])){

        $idP = $_POST['id_port'];
        $idA = $_POST['id_port_arrivee'];
        $idS = $_POST['idSecteur'];
        $idM = $_POST['dMilles'];
        
        $cnx = connexionPDO();
        $req = $cnx->prepare('INSERT INTO liaison (id_port , id_port_arrivee , idSecteur , dMilles ) VALUES (:id_port , :id_port_arrivee , :idSecteur , :dMilles )');

        $req->bindParam(':id_port', $idP, PDO::PARAM_INT);
        $req->bindParam(':id_port_arrivee', $idA, PDO::PARAM_INT);
        $req->bindParam(':idSecteur', $idS, PDO::PARAM_INT);
        $req->bindParam(':dMilles', $idM, PDO::PARAM_INT);

        $resultat = $req->execute();

        if($resultat){

            $_SESSION["success"] = 'Liaison ajouté';

        }

        else{

            $_SESSION["error"] = 'Problème lors de l\'ajout d une liaison';

        }

        header('location: index.php?action=crudliaison');

    }


    if(isset($_POST['edit'])){

        $id = $_POST['id'];

        $idP = $_POST['id_port'];  
        $idA = $_POST['id_port_arrivee'];
        $idS = $_POST['idSecteur'];
        $idM = $_POST['dMilles'];    
        
        $cnx = connexionPDO();
        $req = $cnx->prepare('UPDATE liaison SET id_port = :id_port , id_port_arrivee = :id_port_arrivee , idSecteur = :idSecteur , dMilles = :dMilles WHERE id = :id');

        $req->bindParam(':id_port', $idP, PDO::PARAM_STR);

        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->bindParam(':id_port_arrivee', $idA, PDO::PARAM_INT);
        $req->bindParam(':idSecteur', $idS, PDO::PARAM_INT);
        $req->bindParam(':dMilles', $idM, PDO::PARAM_INT);


        $resultat = $req->execute();


        if($resultat){

            $_SESSION['success'] = 'Liaison modifié';

        }      

        else{

            $_SESSION['error'] = 'Problème lors de la modification d une liaison';

        }

        header('location: index.php?action=crudliaison');

    }

    if(isset($_POST['supr'])){

        $id = $_POST['id'];
        
        $cnx = connexionPDO();

        $req = $cnx->prepare('DELETE FROM liaison WHERE id = :id ');

        $req->bindParam(':id', $id, PDO::PARAM_INT);

        $resultat = $req->execute();

        if($resultat){

            $_SESSION['success'] = 'Liaison supprimé';

        }      

        else{

            $_SESSION['error'] = 'Problème lors de la suppression d une liaison';

        }

        header('location: index.php?action=crudliaison');

    }

?>