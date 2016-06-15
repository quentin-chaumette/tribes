<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
?>
<!-- PAGE CONTENT -->


	<article class="page_content inscription_phase" id="inscription_user">
		<h1>Bienvenue sur Tribes !</h1>
		<h2>Saisissez les informations suivantes pour finaliser votre inscription :</h2>
		<form id="user_inscription" action="../modules/finalise_inscri_user.php" method="post">
			<input type="text" name="firstname" id="firstname" placeholder="Prénom"></input>
			<input type="text" name="name" id="name" placeholder="Nom"></input>
			<input type="text" name="local" id="local" placeholder="Localisation"></input>
			<?php
				if($_GET['user_mail']){
					echo " <input type=\"text\" name=\"mail\" id=\"mail\" value=\"".$_GET['user_mail']."\" disabled></input>"; 	
				}
				else{

				}
			?>
			<input type="password" name="pass" id="pass" placeholder="Mot de passe"></input>
			<input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirmation du mot de passe"></input>
			<input type="submit" name="add_user" id="add_user" value="Suivant"></input>
		</form>

	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'footer.php';
	include '../modules/scripts_calls.php';
?>
</body>
</html>