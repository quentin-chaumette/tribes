<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
	include 'left_navbar.php';
	include '../modules/get_requests.php';
?>
<!-- PAGE CONTENT -->


	<div class="container" id="dashboard">

		<nav class="nav-sort">
			<ul>
				<li><a href="#" class="title active">Tout voir</a></li>
				<li><a href="#" class="title">Non traitées</a></li>
				<li><a href="#" class="title">En cours</a></li>
				<li><a href="#" class="title">Terminées</a></li>
				<li><a href="#" class="title">Refusées</a></li>
			</ul>
		</nav>

		<section class="requests">

		</section>

	</div>


<!-- END PAGE CONTENT -->
<?php
	include 'footer.php';
	include '../modules/scripts_calls.php';
?>
</body>
</html>