<?php 
session_start();
require_once('connect/connect.php');
	if(isset($_GET['classe'])){
		$classe=$_GET['classe'];
		$id=$_SESSION['id'];
		switch ($classe) {
	    case "guerisso_dude":
	    case "guerisso_girl":
	        $attrID1=5;
	        $attrID2=8;
	        break;
	    case "speleo_dude":
	    case "speleo_girl":
	        $attrID1=3;
	        $attrID2=4;
	        break;
	    case "explo_dude": 
	    case "explo_girl":
	        $attrID1=2;
	        $attrID2=7;
	    case "indiana_dude":
	    case "indiana_girl":
	        $attrID1=1;
	        $attrID2=6;
	        break;
	}

		try
	                {
					  $init = $bdd->prepare("UPDATE personnage set Pers_classe=:classe WHERE Pers_user=:id");
	                  $init->bindValue(':classe', $classe, PDO::PARAM_STR);
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->execute();

	                  $init = $bdd->prepare("UPDATE utilisateur set User_init=1 WHERE User_ID=:id");
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->execute();
	                  $_SESSION['init']=1;

	                  $init = $bdd->prepare("SELECT Mva_Attrval from mva_attrpersid where mva_persid=:id and mva_attrid=:attr1");
	                  $init->bindValue(':attr1', $attrID1, PDO::PARAM_STR);
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->execute();
	                  $attr = $init->fetch();
	                  if($attr['Mva_Attrval']==5){
	                  	$stat1=$attr['Mva_Attrval'];
	              	  }else{
	              	  	$stat1=$attr['Mva_Attrval']+1;
	              	  }

	                  $init = $bdd->prepare("SELECT Mva_Attrval from mva_attrpersid where mva_persid=:id and mva_attrid=:attr2");
	                  $init->bindValue(':attr2', $attrID2, PDO::PARAM_STR);
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->execute();
					  $attr = $init->fetch();
	                  if($attr['Mva_Attrval']==5){
	                  	$stat2=$attr['Mva_Attrval'];
	              	  }else{
	              	  	$stat2=$attr['Mva_Attrval']+1;
	              	  }

	                  $init = $bdd->prepare("UPDATE mva_attrpersid set Mva_Attrval=:stat1 WHERE mva_persid=:id and mva_attrid=:attr1");
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->bindValue(':stat1', $stat1, PDO::PARAM_STR);
	 				  $init->bindValue(':attr1', $attrID1, PDO::PARAM_STR);
	                  $init->execute();

	                  $init = $bdd->prepare("UPDATE mva_attrpersid set Mva_Attrval=:stat2 WHERE mva_persid=:id and mva_attrid=:attr2");
	                  $init->bindValue(':id', $id, PDO::PARAM_STR);
	                  $init->bindValue(':stat2', $stat2, PDO::PARAM_STR);
	 				  $init->bindValue(':attr2', $attrID2, PDO::PARAM_STR);
	                  $init->execute();

	                
	                  
	                }catch(Exception $e)
	                {
	                  exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
	                }finally
	                {
	                  $init->closeCursor(); // Termine le traitement de la requête
	                }
	}

?>