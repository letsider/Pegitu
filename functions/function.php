<?php 
require_once('connect/connect.php');

function login($bdd) {
 
        // Si on a soumit le formulaire (si on a cliqué sur "Se connecter")
        if(isset($_POST['go_login'])) {
 
            // Si les deux champs ne sont pas vides
            if(!empty($_POST['login']) && !empty($_POST['password'])) {
 
                $user = $bdd->prepare("SELECT * FROM utilisateur WHERE User_Login = '".$_POST['login']."'");
                $user->execute();
                $count = $user->rowCount();
                // On éxécute une requête pour détecter si le login entré existe dans la base

                //$query = mysql_query("SELECT * FROM utilisateur WHERE User_Login = '".$_POST['login']."'");
 
                // Si on a un résultat => il existe
                if($count == 1) {
                    $donnees = $user->fetch();
 
                    // On vérifie la concordance des mots de passe (en md5)
                    if(md5($_POST['password']) == $donnees['User_Password']) {
 
                        // Si on arrive jusque ici c'est que le couple login / mot de passe est résolu
                        // On lance donc la session
 
                        session_start();
                        $_SESSION['id'] = $donnees['User_ID'];
                        $_SESSION['login'] = $donnees['User_Login'];
                        $_SESSION['time'] = time();
                        $user->closeCursor();
 
                    } else {
                        echo "<p align='center' style='color:red'><strong>Mauvais mot de passe pour cet utilisateur.</strong></p>";

                    }
 
                } else {
                	echo "<p align='center' style='color:red'><strong>Ce login n\'existe pas dans notre base.</strong></p>";
                    
                }
            } else {
            	echo "<p align='center' style='color:red'><strong>Vous devez remplir tous les champs !</strong></p>";
               
            }
        }
    }

    function deplacement($currentCoord,$newCoord,$persid){
        if(canMove($currentCoord,$newCoord)=="true"){   
            $newX=$newCoord{0};
            $newY=$newCoord{1};
            if(strlen($newCoord)==3){
                $newY=$newY.$newCoord{2};
            }

            $newY=intval($newY);
            changeCoord($newX,$newY,$persid);
            $_SESSION['coord']=$newX.$newY;
            }
           


    }

    /*function deplcXUn($x,$val){



    }*/
    function decrementLetter($l) {
        return chr(ord($l) - 1);
    }
    function canMove($currentCoord,$newCoord){

        $currentX=$currentCoord{0};
        $currentX++;
        $testXPlus=$currentX;
        $currentX=$currentCoord{0};
        $currentX=decrementLetter($currentX);
        $testXMoins=$currentX;
        $currentX=$currentCoord{0};


        $currentY=$currentCoord{1};
        if(strlen($currentCoord)==3){
            $currentY=$currentY.$currentCoord{2};
        }

        $currentY=intval($currentY);
        
        $newX=$newCoord{0};
        $newY=$newCoord{1};
        if(strlen($newCoord)==3){
            $newY=$newY.$newCoord{2};
        }

        $newY=intval($newY);

        if($_SESSION['depl']==0){
            return "false";
        }elseif( ($currentY-1==$newY || $currentY+1==$newY) && $currentX==$newX){

            return "true";

        }elseif(($testXPlus==$newX || $testXMoins==$newX)&& $currentY==$newY){

            return "true";
        }else{

            return "false";
        }
    }

    function changeCoord($x,$y,$persid){
                $user="root";
                $pass="";
                $options = array(
                    PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
                  );
                try
                {
                    // On se connecte à MySQL
                    $bdd = new PDO('mysql:host=127.0.0.1;dbname=pegitu', $user, $pass,$options);
                }
                catch(Exception $e)
                {
                    // En cas d'erreur, on affiche un message et on arrête tout
                        die('Erreur : '.$e->getMessage());
                }
                try
                {
                  $coord = $bdd->prepare("UPDATE plateau SET plat_x=:x, plat_y=:y WHERE plat_persid=:id");
                  $coord->bindValue('id', $persid, PDO::PARAM_STR);
                  $coord->bindValue('x', $x, PDO::PARAM_STR);
                  $coord->bindValue('y', $y, PDO::PARAM_STR);

                  $coord->execute();

                }catch(Exception $e)
                {
                  exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
                }finally
                {
                  $coord->closeCursor(); // Termine le traitement de la requête
                }
    }


?>