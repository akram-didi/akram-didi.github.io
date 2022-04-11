<?php
function getsecteur(){
					
                    try {
                        $cnx = connexionPDO();
                        $req = $cnx->prepare ("SELECT * FROM secteur natural join liaison");
                        $req->execute();
                        $unsecteur = $req->fetch(PDO::FETCH_ASSOC);
                        while ($unsecteur) {
                                $resultat[] = $unsecteur;
                                $unsecteur = $req->fetch(PDO::FETCH_ASSOC);
                        }
                        return $resultat;
                        } catch (PDOException $e) {
                            print "Erreur !: " . $e->getMessage();
                            die();
                        }	
                }
                
                
                
                
                
                
                ?>



