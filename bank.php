<?php
require_once('connect/connect.php');
?>
<section id="bank" class="one">
<div class="container">
					
	<header>
		<h2>Bank</h2>
	</header>
	<div id="picture-bank">
		
		<table style="width:800px;height:700px;">
			<tbody>
				<?php
					try
						{
							$bank = $bdd->prepare("SELECT item_nom,item_desc,bank_itemnb FROM item left join bank on item_id=bank_itemid");
							$bank->execute();
							$count = $bank->rowCount();
							$cursor=0;
							for($i=0;$i<5;$i++){ ?>
								<tr>
					
								<?php for($j=0;$j<5;$j++){

									if($cursor<$count){ 
										$donnees = $bank->fetch(); ?>
										<td title="<?php echo $donnees['item_desc'];?>" style="width:160px;height:140px;">
											<img style="width:50px;height:50px;" src="images/avatar.jpg"/></br>
											<p><?php echo $donnees['item_nom']; ?> X <?php echo $donnees['bank_itemnb']; ?>	</p>
										</td>
									<?php }else{ ?>
										<td title="Vide">
											<img style="width:50px;height:50px;" src="images/coffre.jpg"/></br>
										</td>
									<?php } 
									$cursor++;
								} ?>
								</tr>
							<?php } 
						}catch(Exception $e)
						{
							exit('<b>Catched exception at line '. $e->getLine() .' :</b> '. $e->getMessage());
						}finally
						{
							$bank->closeCursor(); // Termine le traitement de la requête
						}?>
			</tbody>
		</table>

	</div>

								

			
						

</div>
</section>
<?php //include('chat/chat.php');?>