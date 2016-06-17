<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
	include 'left_navbar.php';
	include '../modules/db_connect.php';
	include '../modules/get_requests.php';
	include '../modules/get_user.php';
?>
<!-- PAGE CONTENT -->

<div class="overlay">
	<div class="modal">
		<i class="fa fa-times close" aria-hidden="true"></i>
		<h1 class="title">Créer une nouvelle requête</h1>
		<p>Votre appartement : </p> <span> Bâtiment B - 308</span>
		<form action="POST">
			<input class="input-object" type="text" placeholder="Description en une phrase..." maxlength="50"><div class="count"><span class="counter">0</span>/50</div>
			<textarea class="text-content" name="textarea" id="" cols="30" rows="10" placeholder="Dites-en plus..." maxlength="150"></textarea><div class="count"><span class="counter2">0</span>/150</div>
			<button type="submit" value="Submit" class="btn-blue add-card">Envoyer</button>
		</form>
	</div>
</div>

<div class="container" id="dashboard">
	<nav class="nav-sort">
		<ul>
			<li><a href="#" class="title active">Tout voir</a></li>
			<li><a href="#" class="title">Non traitées</a></li>
			<li><a href="#" class="title">En cours</a></li>
			<li><a href="#" class="title">Terminées</a></li>
			<li><a href="#" class="title">Attribuées</a></li>
		</ul>
	</nav>

	<section class="requests content-container">
			<?php include "requests_content.php"; ?>
	</section>
</div>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>