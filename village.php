<?php
require_once('connect/connect.php');
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!isset($_SESSION['maintenance']) || $_SESSION['maintenance']==0){
   			echo "<p align='center' style='color:red'><strong>Le site sera de retour le Dimanche 15/03 à 10h</strong></p>";
}else{
?>
<section id="island" class="one">
<div class="container">
					
	<header>
		<img src="images/cata.PNG" width="125" height="125" border="0" style="float:left"/>
		<h2>Village</h2>
	</header>
	<br><br>

	<div id="picture-village">
		<button style="float:left" class="button scrolly">Construction !</button>
		<img src="images/village.PNG" border="0" usemap="#map" />

			<map name="map">
			<!-- #$-:Image map file created by GIMP Image Map plug-in -->
			<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
			<!-- #$-:Please do not edit lines starting with "#$" -->
			<!-- #$VERSION:2.3 -->
			<!-- #$AUTHOR:info0556 -->
			<area shape="rect" coords="329,139,424,243" target="cabane"  href=="#" />
			</map>

	</div>

								

			
						

</div>
</section>
<?php } ?>
<?php //include('chat/chat.php');?>