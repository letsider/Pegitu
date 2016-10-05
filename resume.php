<?php
require_once('connect/connect.php');
if($isFirstTime==0){ 
	$init="javascript:showZoom('init');";
}
if(!isset($_SESSION['maintenance']) || ($_SESSION['maintenance']==0 && $isFirstTime==1)){
   			echo "<p align='center' style='color:red'><strong>Le site sera de retour le Dimanche 15/03 à 10h</strong></p>";
}else{
?>

<section id="resume" class="one">
						<div class="container">


							<header>
								<h2 class="alt">Bienvenue sur Pegitu Island</h2>
							</header>
							
							<p> Se réunir est un début,
							 rester ensemble est un progrès,
							  travailler ensemble est la réussite.
</p>

							<footer>
								<button id="startButton" onclick="<?php echo $init;?>" class="button scrolly">Commencer</button>
							</footer>

						</div>
</section>
<script>
	$(document).ready(function(){
		<?php 
		if($isFirstTime==0){
			echo "$('#main').css('margin-left','0');";
		}		
?>
	});
</script>
<?php } ?>
<?php //include('chat/chat.php');?>