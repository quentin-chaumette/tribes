<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
?>
<!-- PAGE CONTENT -->


	<article class="page_content inscription_phase" id="inscription_user">
		<h1>Inscription</h1>
		<h2>Qui êtes vous ?</h2>
		<form id="user_inscription" action="../modules/insert_user.php" method="post">
			<input type="text" name="firstname" id="firstname" placeholder="Prénom" required="required"></input>
			<input type="text" name="name" id="name" placeholder="Nom" required="required"></input>
			<input type="text" name="local" id="local" placeholder="n° appartement, étage …"></input>
			<input type="email" name="mail" id="mail-user-inscription" placeholder="mail@exemple.com" required="required"></input>
			<p class="msg-error-user-exist"></p>
			<input type="password" name="pass" id="pass" placeholder="Mot de passe (plus de 8 caractères)" pattern="(*\d)(*[a-z])(*[A-Z]).{8,}" required="required"></input>
			<input type="password" name="confirm_pass" id="confirm_pass" placeholder="Confirmation du mot de passe" required="required"></input>
			<p class="msg-error-match-passw"></p>
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