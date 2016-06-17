<?php
	include 'html_head.php';
	echo "<body>";
	include 'header_connexion.php';
?>
<!-- PAGE CONTENT -->


	<section class="page_content inscription_phase container">
		<form method="post" action="../modules/check_connexion.php">
			<h1 class="title">Se connecter</h1>
			<div class="group">
				<input type="email" name="mail" id="mail-user-inscription" required="required">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Votre email</label>
			</div>
			<div class="group">
				<input type="password" minlength=6 name="pass" id="pass" pattern="(*\d)(*[a-z])(*[A-Z]).{6,}" required="required">
				<span class="highlight"></span>
				<span class="bar"></span>
				<label>Votre mot de passe</label>
			</div>
			<input type="submit" class="btn-blue" value="Suivant"></input>
			<a class="item-subtitle" style="text-decoration:underline;" href="inscription.php">Je n'ai pas encore de compte.</a>
		</form>
	</section>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>