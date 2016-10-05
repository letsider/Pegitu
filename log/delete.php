<?php
require_once("connect.php");

include("dbco.php");


if(isset($_GET["client"]))
{
$client=$_GET["client"];
mysql_query("delete from client where CLIENT_Nom='".$client."';");
echo "<script>initDiv('../parametrage/tabcli.php');</script>";
}

if(isset($_GET["vehicule"]))
{
$vehicule=$_GET["vehicule"];
mysql_query("delete from vehicule where VEHICULE_Nom='".$vehicule."';");
echo "<script>initDiv('../parametrage/tabvehicule.php');</script>";
}






?>

          	



       

