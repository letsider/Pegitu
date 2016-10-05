<?php 
session_start();
require_once('connect/connect.php');
require_once('functions/function.php');
if(isset($_GET['currCoo']) && isset($_GET['newCoo'])){
deplacement($_GET['currCoo'],$_GET['newCoo'],$_SESSION['id']);

}
?>