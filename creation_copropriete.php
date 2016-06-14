<?php
	include 'php/html_head.php';
	include 'php/header.php';
?>
<body>
<!-- PAGE CONTENT -->


	<article class="page_content inscription_phase" id="coprop_creation">
		<h1>Créer une copropriété</h1>
		<h2>Saisissez les informations suivantes :</h2>
		<form id="copro_creation" action="php/_functions/insert_coprop.php" method="post">
			<input type="text" name="title" id="title" placeholder="Nom"></input>
			<input type="text" name="address" id="address" placeholder="Adresse"></input>
			<input type="text" name="postal_code" id="postal_code" placeholder="Code postal"></input>
			<input type="text" name="city" id="city" placeholder="Ville"></input>
			<?php 
				$user_id=$_GET["user_id"]; 
				echo " <input class=\"input_hide\" type=\"text\" name=\"user_id\" value=\"".$user_id."\" ></input>"; 
			?>
			<input type="submit" name="add_coprop" id="add_coprop" value="Suivant"></input>
		</form>

	</article>


<!-- END PAGE CONTENT -->
<?php
	include 'php/footer.php';
	include 'php/scripts_calls.php';
?>
</body>
</html>