<html>
<head>
  <?php
  session_start();    
  ?>
  <title>Pegitu Island</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="images/logo.PNG" type="image/x-icon"/> 
    <link rel="icon" href="images/logo.PNG" type="image/x-icon"/>
    <link rel="stylesheet" href="js/jquery-ui.css">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet" type="text/css" /> -->
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script>
    <script type="text/javascript" language="javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/zoombox/zoombox.js"></script>
    <link href="js/zoombox/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
    <noscript>
      <link rel="stylesheet" href="css/skel-noscript.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="stylesheet" href="css/style-wide.css" />
    </noscript>

    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie8.css" /><![endif]-->
  </head>


</head>


<header>
	<h1  align='center'>Pegitu Island</h1>



	
   
  <body>
  <?php 

   
   
   if(!isset($_SESSION['id'])) {
    
    
        echo "<p align='center' style='color:red'><strong>Vous n'êtes pas connecté</strong></p>";
 
        echo  "<br>";
     include('log/login.php');
   }
   else
   {
      header('Location: main.php#');

   }
    

   ?>

   
   
    <div id="page" ></div>
   



 





  </body>
</html>