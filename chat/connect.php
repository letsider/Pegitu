<?php
$user="104891";
$pass="1274192";
$options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
  );
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=mysql-pegitu-island.alwaysdata.net;dbname=pegitu-island_1', $user, $pass,$options);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}


?>
