<?php
	include 'php/html_head.php';
	include 'php/header.php';
?>
<body>
<!-- PAGE CONTENT -->


	<article class="page_content inscription_phase" id="invit_coproprios">
		<h1>Invitez des copropriétaires ou locataires</h1>
		<h2>Saisissez les adresses mail :</h2>
		<form id="coproprios_invitation" action="php/_functions/insert_coproprios.php" method="post">
			<div class="inputs-mail">
				<input type="text" name="mail[]" class="mail" placeholder="exemple@gmail.com"></input>
				<input type="text" name="mail[]" class="mail" placeholder="exemple@gmail.com"></input>
				<input type="text" name="mail[]" class="mail" placeholder="exemple@gmail.com"></input>
			</div>
			<span class="add_mail_field">+</span>
			<?php 
				$coprop_id=$_GET["coprop_id"]; 
				echo " <input class=\"input_hide\" type=\"text\" name=\"coprop_id\" value=\"".$coprop_id."\" ></input>"; 
			?>
			<input type="submit" name="add_coproprios" id="add_coproprios" value="Terminer"></input>
		</form>

	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'php/footer.php';
	include 'php/scripts_calls.php';
?>
</body>
</html>