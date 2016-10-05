<?php
	require_once('connect/connect.php');
    include('functions/function.php');
     
    
    
    login($bdd);
	
    if(isset($_SESSION['id'])) {

        // On redirige l'utilisateur vers une page de login
        header('Location: main.php#');
    }
?>


<section class="one">
<form id="login_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
	<table width="350" border="0" align="center" cellpadding="0" cellspacing="1">
		<tr>
			
				<td>
					<table width="100%" border="0" cellpadding="3" cellspacing="1">
						<tr>
							<td colspan="3"><strong>Connectez-vous</strong></td>
						</tr>

						<tr>
							<td><label for="login">Login :</label></td>
							<td><input type="text" id="login" name="login"/></td>
						</tr>

						<tr>
							<td><label for="pass2">Password :</label></td>
							<td><input type="password" id="password" name="password"/></td>
						</tr>

					</table>
					
				</td>
		</tr>
	</table>
	<p align="center"><input type="submit" class="button scrolly" name="go_login" value="Login"/></p>
</form>
</section>
	