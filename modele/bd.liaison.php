<?php
function getl(){
					
                    try {
                        $cnx = connexionPDO();
                        $req = $cnx->prepare ("SELECT * FROM  liaison");
                        $req->execute();
                        $uneliaison = $req->fetch(PDO::FETCH_ASSOC);
                        while ($uneliaison) {
                                $resultat[] = $uneliaison;
                                $uneliaison = $req->fetch(PDO::FETCH_ASSOC);
                        }
                        return $resultat;
                        } catch (PDOException $e) {
                            print "Erreur !: " . $e->getMessage();
                            die();
                        }	
                }
                
                
                
                
                
                
                ?>