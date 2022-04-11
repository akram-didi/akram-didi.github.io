<?php
function getcategorie(){
					
                    try {
                        $cnx = connexionPDO();
                        $req = $cnx->prepare ("SELECT * FROM  categorie");
                        $req->execute();
                        $unecategorie = $req->fetch(PDO::FETCH_ASSOC);
                        while ($unecategorie) {
                                $resultat[] = $unecategorie;
                                $unecategorie = $req->fetch(PDO::FETCH_ASSOC);
                        }
                        return $resultat;
                        } catch (PDOException $e) {
                            print "Erreur !: " . $e->getMessage();
                            die();
                        }	
                }
                
                
                
                
                
                
                ?>