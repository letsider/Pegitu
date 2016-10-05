<?php
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


?>
