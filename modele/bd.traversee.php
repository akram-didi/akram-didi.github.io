<?php
function gettraversee(){
					
                    try {
                        $cnx = connexionPDO();
                        $req = $cnx->prepare ("SELECT * FROM traverse ");
                        $req->execute();
                        $unetraversee = $req->fetch(PDO::FETCH_ASSOC);
                        while ($unetraversee) {
                                $resultat[] = $unetraversee;
                                $unetraversee = $req->fetch(PDO::FETCH_ASSOC);
                        }
                        return $resultat;
                        } catch (PDOException $e) {
                            print "Erreur !: " . $e->getMessage();
                            die();
                        }	
                }
                
                
                
                
                
                
                ?>