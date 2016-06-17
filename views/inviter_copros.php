<?php	include 'html_head.php'; ?>
<body>
<?php	include 'header_connexion.php';?>

<!-- PAGE CONTENT -->


	<section class="page_content inscription_phase container" id="invit_coproprios">
		<form id="coproprios_invitation" action="../modules/insert_coproprios.php" method="post">
			<h1 class="title">Invitez des copropriétaires à vous rejoindre</h1>
			<div class="inputs-mail">
				<div class="group">
					<input type="email" name="mail[]" class="mail" placeholder="exemple@gmail.com" style="width:80%;"></input>
					<span class="highlight"></span>
	      	<span class="bar" style="width:80%"></span>
	      </div>
	      <div class="group">
					<input type="email" name="mail[]" class="mail" placeholder="exemple@gmail.com" style="width:80%;"></input>
					<span class="highlight"></span>
	      	<span class="bar" style="width:80%"></span>
	      </div>

			</div>
			<i class="fa fa-plus add_mail_field" aria-hidden="true"></i>

			<?php
				$coprop_id=$_GET["coprop_id"];
				echo " <input class=\"input_hide\" type=\"text\" name=\"coprop_id\" value=\"".$coprop_id."\" READONLY></input>";
			?>
			<button class="btn-blue" type="submit" name="add_coproprios" id="add_coproprios">Envoyer l'invitation</button>
			<a class="item-subtitle" href="dashboard.php" style="text-decoration:underline;">Je le ferai plus tard</a>
		</form>

	</section>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>