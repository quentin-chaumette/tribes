<?php
	if(! isset($_GET["user_id"])){
		header ("location: ../views/inscription.php");
	}
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
?>
<!-- PAGE CONTENT -->


	<section class="page_content inscription_phase container" id="coprop_creation">
		<form id="copro_creation" action="../modules/insert_coprop.php" method="post">
			<h1 class="title">Données de votre copropriéré</h1>
			<div class="group">
				<input type="text" name="title" id="coprop-title-inscription" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Son nom<span>*</span></label>
      </div>
			<p class="msg-error-coprop-exist"></p>
			<div class="group">
				<input type="text" name="address" id="address" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Adresse<span>*</span></label>
      </div>
      <div class="group">
				<input type="text" name="postal_code" id="postal_code" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Code postal<span>*</span></label>
      </div>
      <div class="group">
				<input type="text" name="city" id="city" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Ville<span>*</span></label>
      </div>
      <h1 class="title">Indiquez l'email de votre Syndic en charge</h1>
      <div class="group">
				<input type="email" name="syndic_mail" id="syndic-mail" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Email du Syndic<span>*</span></label>
      </div>
			<?php
				$user_id=$_GET["user_id"];
				echo " <input class=\"input_hide\" type=\"text\" name=\"user_id\" value=\"".$user_id."\" READONLY></input>";
			?>
			<button class="btn-blue" type="submit" name="add_coprop" id="add_coprop">C'est parti</button>
			<a class="item-subtitle" style="text-decoration:underline;" href="connexion.php">Vous copropriété est déjà inscrite ? Connectez-vous.</a>
		</form>
	</section>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>