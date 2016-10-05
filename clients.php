<?php
require_once('/connect/connect.php');
?>
<section id="cli" class="one">
<div class="container">
					
							<header>
								<h2>Clients</h2>
							</header>

								<div id="tableClient">
								<table><tbody>
								<?php
								$clients = $bdd->prepare('SELECT * FROM CLIENT');
								$clients->execute();
								$count = $clients->rowCount();
								// On affiche chaque entrée une à une
								while ($donnees = $clients->fetch())
								{


									
										?><tr>
											<td>
											<?php echo $donnees['Cli_Nom'];?>
											</td>
											<td>
											<?php echo $donnees['Cli_Prenom'];?>
											</td>
											<td>
											<?php echo $donnees['Cli_Nom'];?>
											</td>
											<td>
											<?php echo $donnees['Cli_Prenom'];?>
											</td>
											<td>
											<?php echo $donnees['Cli_Nom'];?>
											</td>
											<td>
											<?php echo $donnees['Cli_Prenom'];?>
											</td>
											<td><button >Delete</button></td>
										</tr>
									

									<!-- $("#tableClient td").css("padding","3px");
									$("#tableClient td").css("margin","3px");
									$("#tableClient td").css("border","1px solid black"); -->
									
								<?php
								}

								$clients->closeCursor(); // Termine le traitement de la requête
								?>
								</tbody></table>
								</div>

	
								<div id="counter">
								</div>
						
							<div class="row">
								<div id="entries">
									<label value="">Nom</label><div><input id="nom" type="text"></input></div>
									<label value="">Prénom</label><div><input id="prenom" type="text"></input></div>
									<label value="">Ville</label><div><input id="city" type="text"></input></div>
									<label value="">Code postal</label><div><input id="cp" type="text"></input></div>
									<label value="">Adresse</label><div><input id="adr" type="text"></input></div>
									<label value="">Téléphone</label><div><input id="tel" type="text"></input></div>
									<label value="">Mail</label><div><input id="mail" type="text"></input></div>
									<button onclick="writeFileClients();">Ajouter toto !</button></br>
								</div>
								<div id="results">
									<label value="">Numéro</label><div><input id="num" type="text" readonly></input></div>
									<label value="">Nom</label><div><input id="editNom" type="text"></input></div>
									<label value="">Prénom</label><div><input id="editPrenom" type="text"></input></div>
									<label value="">Ville</label><div><input id="editCity" type="text"></input></div>
									<label value="">Code postal</label><div><input id="editCp" type="text"></input></div>
									<label value="">Adresse</label><div><input id="editAdr" type="text"></input></div>
									<label value="">Téléphone</label><div><input id="editTel" type="text"></input></div>
									<label value="">Mail</label><div><input id="editMail" type="text"></input></div>
								</div>
								
							</div>
						</div>
</section>