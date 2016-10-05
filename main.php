<?php 
session_start();
require_once('connect/connect.php');
   if(!isset($_SESSION['id'])) {
    if(isset($_GET["log"]))
    {
      if($_GET["log"]=="false")
      {
        echo "<p align='center' style='color:red'><strong>Vous n'êtes pas connecté</strong></p>";
      }
    }

    
     echo  "<br>";
     include('log/login.php');
   }else{
   	$id=$_SESSION['id'];
   	$_SESSION['depl']=1;
 	     try
                {
				  $init = $bdd->prepare("SELECT User_init FROM utilisateur WHERE User_ID=:id");
                  $init->bindValue('id', $id, PDO::PARAM_STR);
                  $init->execute();
                  $dataInit=$init->fetch();
                  $isFirstTime=$dataInit['User_init'];
                  $_SESSION['init'] = $isFirstTime;

                  $init = $bdd->prepare("SELECT Plat_x,Plat_y FROM plateau WHERE plat_persid=:id");
                  $init->bindValue('id', $id, PDO::PARAM_STR);
                  $init->execute();
                  $dataInit=$init->fetch();
                  $_SESSION['coord']=$dataInit['Plat_x'].$dataInit['Plat_y'];  

                  $init = $bdd->prepare("SELECT vil_init FROM village");
                  $init->execute();
                  $dataInit=$init->fetch();
                  $_SESSION['maintenance'] = $dataInit['vil_init'];       
                }catch(Exception $e)
                {
                  exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
                }finally
                {
                  $init->closeCursor(); // Termine le traitement de la requête
                }  



  ?>
<!DOCTYPE HTML>
<html>
	<head>
	
		<title>Pegitu Island</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="shortcut icon" href="images/logo.png" type="image/x-icon"/> 
        <link rel="icon" href="images/logo.png" type="image/x-icon"/>
        <link rel="stylesheet" href="js/jquery-ui.css">
        <link rel="stylesheet" href="css/styletooltip.css">
        <link rel="stylesheet" type="text/css" href="chat/stylechat.css">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" /> -->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="chat/chat.js"></script>
		<script type="text/javascript" language="javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/zoombox/zoombox.js"></script>
    	<link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

        });
        </script>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
	</head>
	<body>
	<?php if($isFirstTime==1 && $_SESSION['maintenance']==1){?>

		<!-- Header -->
			<div id="header" class="skel-panels-fixed">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/logo.PNG" alt="" /></span>
							<h1 id="title">Pegitu Island</h1>
							<span class="byline">Se réunir est un début,<br>
							 rester ensemble est un progrès,<br>
							  travailler ensemble est la réussite.</span>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#village" onclick="javascript:initDiv('village.php','main');return false;" id="village-link" class="skel-panels-ignoreHref active"><span class="fa fa-th">Le village</span></a></li>
								<li><a href="#islands" onclick="javascript:initDiv('island.php','main');return false;" id="island-link" class="skel-panels-ignoreHref"><span class="fa fa-th">Parcourir l'île</span></a></li>
								<li><a href="#perso" onclick="javascript:initDiv('perso.php','main');return false;" id="perso-link" class="skel-panels-ignoreHref"><span class="fa fa-user">Mon personnage</span></a></li>
								<li><a href="#contact" onclick="javascript:initDiv('contact.php','main');return false;" id="contact-link" class="skel-panels-ignoreHref"><span class="fa fa-envelope">Contact</span></a></li>
								<li><a href='log/logout.php' id="deconnect-link" class="skel-panels-ignoreHref"><span class="fa fa-arrow-left">Déconnection</span></a></li>
							</ul>
						</nav>
						
				</div>
				
				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="fa fa-twitter solo"><span>Twitter</span></a></li>
							<li><a href="#" class="fa fa-facebook solo"><span>Facebook</span></a></li>
							<li><a href="#" class="fa fa-github solo"><span>Github</span></a></li>
							<li><a href="#" class="fa fa-dribbble solo"><span>Dribbble</span></a></li>
							<li><a href="#" class="fa fa-envelope solo"><span>Email</span></a></li>
						</ul>
				
				</div>
			
			</div>
			<div id="main"><?php include('village.php');?></div>
		<!-- Main -->
			
			<?php
			 
   		}elseif($_SESSION['maintenance']==0 && $isFirstTime==1){
   			echo "<p align='center' style='color:red'><strong>Le site sera de retour le Dimanche 15/03 à 10h</strong></p>";
   		}else{
   			?>
   				<div id="main">

				<?php echo "<p align='center' style='color:green'><strong>Bienvenue ".$_SESSION['login']."</strong></p>";?>
				<?php include('resume.php');?>							
				</div>
   			<?php
   		}
   			?>

			<input type="hidden" id="dateConnexion" value="<?php echo $_SESSION['time']; ?>" />
		<?php }?>
		
	</body>
</html>