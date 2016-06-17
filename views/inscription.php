<?php
	include 'html_head.php';
	echo "<body>";
	include 'header_connexion.php';
?>
<!-- PAGE CONTENT -->


	<section class="page_content inscription_phase container" id="inscription_user">
		<form id="user_inscription" action="../modules/insert_user.php" method="post">
			<h1 class="title">Inscription</h1>
			<div class="group" style="display:inline-block; margin: 0 20px 30px; width:40%;">
				<input type="text" name="firstname" id="firstname" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Prénom <span>*</span></label>
      </div>
      <div class="group" style="display:inline-block; margin: 0 20px 30px; width:40%;">
				<input type="text" name="name" id="name" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Nom <span>*</span></label>
      </div>
      <div class="group">
				<input type="text" name="local" id="local" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Votre appartement (numéro, étage, bâtiment...) <span>*</span></label>
      </div>
      <div class="group">
				<input type="email" name="mail" id="mail-user-inscription" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Email <span>*</span></label>
      </div>
			<p class="msg-error-user-exist"></p>
			<div class="group">
				<input type="password" minlength=6 name="pass" id="pass" pattern="(*\d)(*[a-z])(*[A-Z]).{6,}" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Mot de passe (6 caractères minimum)<span>*</span></label>
      </div>
      <div class="group">
				<input type="password" name="confirm_pass" id="confirm_pass" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Confirmation mot de passe<span>*</span></label>
      </div>
			<p class="msg-error-match-passw"></p>
			<button type="submit" name="add_user" id="add_user" class="btn-blue" value="Suivant">Valider</button>
			<a class="item-subtitle" style="text-decoration:underline; text-align: right;" href="connexion.php">Vous êtes déjà inscrit ?</a>
		</form>

	</section>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>