<?php	include 'html_head.php'; ?>
<body>
<?php	include 'header_connexion.php';?>
<!-- PAGE CONTENT -->


	<section class="page_content inscription_phase container" id="inscription_user">
		<form id="user_inscription" action="../modules/finalise_inscri_user.php" method="post">
			<h1 class="title">Bienvenue sur Tribes !</h1>
			<h2 class="title">Inscrivez-vous pour rejoindre la copropriété X</h2>
			<div class="group">
        <input type="text" name="firstname" id="firstname" required="required"></input>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Votre prénom <span>*</span></label>
      </div>

      <div class="group">
        <input type="text" name="name" id="name" required="required"></input>
        <span class="highlight"></span>
        <span class="bar"></span>
        <label>Votre nom <span>*</span></label>
      </div>

      <div class="group">
				<input type="text" name="local" id="local" required="required"></input>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Votre appartement (numéro, étage, bâtiment...) <span>*</span></label>
      </div>

      <div class="group">
				<?php
				if($_GET['user_mail']){
					echo " <input type=\"text\" name=\"mail\" id=\"mail\" value=\"".$_GET['user_mail']."\" READONLY></input>";
				}
				else{}
			?>
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Votre appartement (numéro, étage, bâtiment...) <span>*</span></label>
      </div>

			<div class="group">
				<input type="password" minlength=6 name="pass" id="pass" pattern="(*\d)(*[a-z])(*[A-Z]).{6,}" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Mot de passe (6 caractères minimum) <span>*</span></label>
      </div>
      <div class="group">
				<input type="password" name="confirm_pass" id="confirm_pass" required="required">
				<span class="highlight"></span>
      	<span class="bar"></span>
      	<label>Confirmation mot de passe <span>*</span></label>
      </div>
			<p class="msg-error-match-passw"></p>
			<button class="btn-blue" type="submit" name="add_user" id="add_user">Je rejoins ma copropriété</button>
		</form>

	</section>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>