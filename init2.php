<?php
require_once('connect/connect.php');
?>
<head>
	<link rel="stylesheet" href="css/style-switch.css">
	<script type="text/javascript" language="javascript">
	$(document).ready(function(){
		changeClasse('guerisso');

	});
	</script>
</head>
<div id="page">
	<div style="float:left;margin-left:30px;margin-right:30px;">
		<span>Il est temps de choisir ta classe !</span><br>

		<input onclick="changeClasse('guerisso')" type="radio" name="classe" value="guerisso" checked>Le Guérissologue
		<br>
		<input onclick="changeClasse('indiana')" type="radio" name="classe" value="indiana">L'Aventurier
		<br>
		<input onclick="changeClasse('speleo')" type="radio" name="classe" value="speleo" >Le spéléo
		<br>
		<input onclick="changeClasse('explo')" type="radio" name="classe" value="explo">L'Explorateur
		<br>
		<div id="classe-img">
			
		</div>		


		<button type="button" onclick="getLastInit();"><img src="images/right_arrow.png" width="50" heigth="50"></button>

	</div>
	<div class="onoffswitch" style="float:left;">
			<input id="type" type="hidden" value="dude"/>
		    <input onclick="changeType();" type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
		    <label class="onoffswitch-label" for="myonoffswitch">
		        <span class="onoffswitch-inner"></span>
		        <span class="onoffswitch-switch"></span>
		    </label>
		</div>
	<br><br><br><br><br><br>
	<div>

		<?php
								session_start();
								$id= $_SESSION['id'];
								try
								{
									$perso = $bdd->prepare("SELECT attr_nom,attr_desc,mva_attrval FROM mva_attrpersid LEFT JOIN personnage ON pers_id=mva_persid LEFT JOIN attribut ON attr_id=mva_attrid WHERE pers_id=(SELECT pers_id FROM personnage WHERE pers_user=:id)");
									$perso->bindValue('id', $id, PDO::PARAM_STR);
									$perso->execute();
									$count = $perso->rowCount();
									?>
									
									<?php
									while ($donnees = $perso->fetch())
									{
										?>	

											<div id="lbl<?php echo $donnees['attr_nom'];?>">
												<?php echo $donnees['attr_nom'];?>
												<span style="color:green;" id="pls<?php echo $donnees['attr_nom'];?>">+1</span>
												<br>
												<input type="hidden" id="val<?php echo $donnees['attr_nom'];?>" value="<?php echo $donnees['mva_attrval'];?>"/>
												<?php echo $donnees['mva_attrval'];?>
											</div>
												
												
									
									
									<?php		
									}
									
									
								}catch(Exception $e)
								{
									exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
								}finally
								{
									$perso->closeCursor(); // Termine le traitement de la requête
								}


							
							?>

		<!-- <span>Bio</span><br>
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_base.png" width="15" heigth="15" />
		<img src="images/point_plus.png" width="15" heigth="15" />
		<img src="images/point_empty.png" width="15" heigth="15" />
		<img src="images/point_empty.png" width="15" heigth="15" />
		<img src="images/point_empty.png" width="15" heigth="15" /> -->



	</div>
</div>