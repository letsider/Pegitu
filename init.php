<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" language="javascript" src="js/functions.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#text2").hide();
	$("#text3").hide();
	$("#text4").hide();
	$("#last").hide();
});

</script>
</head>
<div id="page">
	<img src="images/max_et_robin.PNG" width="250" height="300" style="float:left;"/>

	<div style="text-align:left;width:80%;">
<input type="hidden" id="currentText" value="text1"/>
		<span id="text1" >Bonjour et bienvenue dans Pegitu !<br> Vous vous apprêtez à faire vos premiers pas dans cet univers.</span>


<span id="text2">Avant toutes choses sachez qu'il n'y a qu'une seule voie pour réussir ce jeux: Il vous faudra travailler ensemble .
 Dans ce monde nouveau et hostile il vous faudra coopérer.
  Chaque choix, chaque acte, vos réussites, mais aussi vos erreurs se répercuteront sur le groupe.
   Je vous conseille de fonctionner sur un mode collaboratif.
    De vous mettre, vous individus, au service de la communauté que vous représentez maintenant. C'est ensemble que vous serez fort.</span>


<span id="text3">Chacun d'entre vous se verra sur le jeu représenté par un avatar.
 Cet avatar a été conçu en fonction de ce que vous êtes, en fonction des compétences que vous nous avez montrées jusqu'ici.
  Vos compétences vous permettront d’interagir sur l’île, mais vous ne pourrez pas les développer dans le jeu.
   Si vous désirez progresser, augmentés individuellement, il vous faudra évoluer en dehors du jeu.
    Ici encore, rien ne vous empêche de coopérer.
 Vous pourrez progresser ici, au Lycée mais aussi et surtout en dehors. Vous apprenez en tout temps et à tout moment. N’hésitez pas à le faire valoir.</span>


<span id="text4">Je pense que je vous en ai dit assez pour le moment, maintenant place au jeu ! 

Puisse le sort vous être favorable…<br>
PS : N’allez pas en haut du volcan !</span><br>

		<button id="last" type="button" onclick="showText($('#currentText').val(),'last')"><img src="images/left_arrow.png" width="50" heigth="50"></button>

		<button id="next" type="button" onclick="showText($('#currentText').val(),'next')"><img src="images/right_arrow.png" width="50" heigth="50"></button>

	</div>
</div>