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
			<li class="all"><a href="#" class="title active" onclick="seeAll()">Tout voir</a></li>
			<li class="toTake"><a href="#" class="title" onclick="toTake()">Non traitées</a></li>
			<li class="todo"><a href="#" class="title" onclick="todo()">En cours</a></li>
			<li class="done"><a href="#" class="title" onclick="done()">Terminées</a></li>
			<li class="attribute"><a href="#" class="title" onclick="attribute()">Attribuées</a></li>
		</ul>
	</nav>

	<section class="requests content-container">
			<?php include "requests_content.php"; ?>
	</section>
</div>
<!-- 	<script>
		function seeAll () {
			$('.card').css('display', 'inline-block')
			$('.nav-sort ul li.all a').addClass('active')
			$('.nav-sort ul li:not(.all) a').removeClass('active')
		}
		function toTake () {
			$('.toTake').css('display', 'inline-block')
			$('.card:not(.toTake)').css('display', 'none')
			$('.nav-sort ul li.toTake a').addClass('active')
			$('.nav-sort ul li:not(.toTake) a').removeClass('active')
		}
		function todo () {
			$('.toDo').css('display', 'inline-block')
			$('.doing').css('display', 'inline-block')
			$('.card:not(.toDo):not(.doing)').css('display', 'none')
			$('.nav-sort ul li.todo a').addClass('active')
			$('.nav-sort ul li:not(.todo) a').removeClass('active')
		}
		function done () {
			$('.done').css('display', 'inline-block')
			$('.card:not(.done)').css('display', 'none')
			$('.nav-sort ul li:not(.done) a').removeClass('active')
			$('.nav-sort ul li.done a').addClass('active')
		}
		function attribute () {
			$('.attribute').css('display', 'inline-block')
			$('.card:not(.attribute)').css('display', 'none')
			$('.nav-sort ul li.attribute a').addClass('active')
			$('.nav-sort ul li:not(.attribute) a').removeClass('active')
		}
	</script>
 -->
<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>