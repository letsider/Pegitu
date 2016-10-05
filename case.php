<?php
if(isset($_GET["case"])){
	$case=$_GET["case"];
}

?>
<head>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script type="text/javascript" language="javascript" src="js/functions.js"></script>
</head>
<div id="loot">
	<div id="objet1" style="margin-right:10px;"><img  onclick="javascript:discoverLoot('objet1');" src="images/case_non_decouverte.PNG" width="100" height="100" /></div>
	<div id="objet2" style="margin-right:10px;"><img onclick="javascript:discoverLoot('objet2');" src="images/case_non_decouverte.PNG" width="100" height="100" /></div>
	<div id="objet3" style=><img onclick="javascript:discoverLoot('objet3');" src="images/case_non_decouverte.PNG" width="100" height="100" /></div>
	
</div>
<div id="descLoot">
		
	</div>
</div>