<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
	include 'left_navbar.php';
	include '../modules/get_requests.php';
?>
<!-- PAGE CONTENT -->

<!-- <div class="overlay"> -->
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
			<?php
				include 'cards/card_todo_admin_someone.php';
				include 'cards/card_todo_admin_you.php';
				include 'cards/card_todo_admin_toyou.php';
				include 'cards/card_todo_user_you.php';
				include 'cards/card_doing.php';
				include 'cards/card_done.php';
				include 'cards/card_todo_user_admin.php';
				include 'cards/card_todo_syndic.php';
			?>
			<button type="submit" value="Submit" class="add-card">+ Ajouter une requête</button>
		</section>
	</div>
<!-- </div> -->

<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>