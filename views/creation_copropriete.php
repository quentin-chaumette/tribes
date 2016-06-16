<?php
	if(! isset($_GET["user_id"])){
		header ("location: ../views/inscription.php");
	}
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
?>
<!-- PAGE CONTENT -->


	<article class="page_content inscription_phase" id="coprop_creation">
		<h1>Créer une copropriété</h1>
		<h2>Saisissez les informations suivantes :</h2>
		<form id="copro_creation" action="../modules/insert_coprop.php" method="post">
			<input type="text" name="title" id="coprop-title-inscription" placeholder="Nom *" required="required"></input>
			<p class="msg-error-coprop-exist"></p>
			<input type="text" name="address" id="address" placeholder="Adresse *" required="required"></input>
			<input type="text" name="postal_code" id="postal_code" placeholder="Code postal *" required="required"></input>
			<input type="text" name="city" id="city" placeholder="Ville *" required="required"></input>
			<input type="email" name="syndic_mail" id="syndic-mail" placeholder="Email du Syndic *" required="required"></input>
			<?php
				$user_id=$_GET["user_id"];
				echo " <input class=\"input_hide\" type=\"text\" name=\"user_id\" value=\"".$user_id."\" READONLY></input>";
			?>
			<input type="submit" name="add_coprop" id="add_coprop" value="Suivant"></input>
		</form>
	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'footer.php';
	include '../modules/scripts_calls.php';
?>
</body>
</html>