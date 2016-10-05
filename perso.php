<?php
require_once('connect/connect.php');
								session_start();
								$id= $_SESSION['id'];
								try
								{
									$perso = $bdd->prepare("SELECT attr_nom,attr_desc,mva_attrval FROM mva_attrpersid LEFT JOIN personnage ON pers_id=mva_persid LEFT JOIN attribut ON attr_id=mva_attrid WHERE pers_id=(SELECT pers_id FROM personnage WHERE pers_user=:id)");
									$perso->bindValue('id', $id, PDO::PARAM_STR);
									$perso->execute();
									$count = $perso->rowCount();

									$classe=$bdd->prepare("SELECT pers_classe FROM personnage WHERE pers_user=:id");
									$classe->bindValue('id', $id, PDO::PARAM_STR);
									$classe->execute();
									$dataClasse=$classe->fetch();
?>
<section id="perso" class="one">
<div class="container">
					
	<header>
		<h2>Mon personnage</h2>
	</header>
	<div id="picture-perso">
	<img id="picture-perso-img" width="250" height="350" src="images/<?php echo $dataClasse['pers_classe'];?>.PNG"/>
		<table><tbody>
							
									<tr><th>Attribut</th><th>Valeur</th></tr>
									<?php
									while ($donnees = $perso->fetch())
									{
										?>
												<tr>
												<td title="<?php echo $donnees['attr_desc'];?>">
												<?php echo $donnees['attr_nom'];?>
												</td>
												<td id="test">
												<?php echo $donnees['mva_attrval'];?>
												</td>												
												</tr>
												
									
									
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
		</tbody></table>
		
	</div>

								

			
						

</div>
</section>
<?php //include('chat/chat.php');?>