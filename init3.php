<?php
require_once('connect/connect.php');
session_start();
?>
<head>
<?php
if(isset($_GET['alreadyInit'])){
	echo '<script src="js/jquery.min.js"></script>';
	echo '<script src="js/jquery-ui.js"></script>';
	echo '<script type="text/javascript" language="javascript" src="js/functions.js"></script>';
}
?>
	<link rel="stylesheet" href="css/style-objectif.css">
	<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		$("#obj1").hide();
		$("#obj2").hide();
		$("#obj3").hide();
		$("#obj4").hide();
		$("#obj5").hide();
		$("#obj6").hide();
		$("#obj7").hide();
		$("#obj8").hide();


	});
	</script>
</head>
<div id="page" style="text-align:center;">
	<input id="lastObj" type="hidden" value=""/>
	<div class="paragraphe">
		<span onclick="showObjectif('obj1',$('#lastObj').val());">Objectif n°1:La reserve de nourriture</span><br>
		<span id="obj1">Permet de passer de 35 unités stockables à un stockage illimité.</span>		
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj2',$('#lastObj').val());">Objectif n°2:La cabane</span><br>
		<span id="obj2">Permet de vous protéger des attaques. Protège également le feu de la pluie.</span>	
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj3',$('#lastObj').val());">Objectif n°3:La reserve de bois</span><br>
		<span id="obj3">Permet de passer de 20 unités stockables à un stockage illimité.</span>
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj4',$('#lastObj').val());">Objectif n°4:La reserve d'eau</span><br>
		<span id="obj4">Permet de passer de 35 unités stockables à un stockage illimité.</span>
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj5',$('#lastObj').val());">Objectif n°5:Le feu de camp</span>	<br>
		<span id="obj5">Vous empêche de tomber malade. Permet également de cuire la nourriture.</span>
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj6',$('#lastObj').val());">Objectif n°6:La reserve de roche</span><br>
		<span id="obj6">Permet de passer de 20 unités stockables à un stockage illimité.</span>
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj7',$('#lastObj').val());">Objectif n°7: L'établi</span><br>
		<span id="obj7">Permet la construction d'outils et d'obets.</span>	
	</div>
	<div class="paragraphe">
		<span onclick="showObjectif('obj8',$('#lastObj').val());">Objectif n°8:La reserve de plante</span><br>
		<span id="obj8">Permet de passer de 20 unités stockables à un stockage illimité.</span>
	</div>
	<button type="button" onclick="initGame('<?php echo $_GET['classe'];?>');"><img src="images/right_arrow.png" width="50" heigth="50"></button>
	</div>
</div>