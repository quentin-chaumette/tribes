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

		<section class="requests content-container">

			<!-- CARD : ADMIN que quelqu'un a posté, qui n'est pas encore prise "A faire" ADD CLASS = toTake-->
			<div class="card toTake">
				<div class="card-wrapper">
					<!-- LEFT -->
					<div>
						<span class="state">À faire</span>
						<span>il y a 2 minutes</span>
						<span class="less">Voir moins</span>
						<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée. <span class="more"> Voir plus</span></h4>
						<p>L’ampoule en face de chez moi est grillée. Le plafond est très haut, quelqu’un se rendrait disponible pour la changer ?</p>
						<a href="http://IMG-capture-0034.jpg" download="fichier_Tribes" class="item-subtitle">IMG-capture-0034.jpg</a>
						<div>
							<img class="user-img" src="http://lorempixel.com/200/200/cats" alt="">
							<div>
								<h5 class="title">Corentin <span>Carilo</span></h5>
								<p class="item-subtitle">Bâtiment A - 1er étage</p>
							</div>
						</div>
					</div><!-- RIGHT
					--><div>
						<div>
							<p class="item-subtitle">Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
							<button type="submit" value="Submit">
								<i class="fa fa-thumbs-up" aria-hidden="true"></i>
								Je prends
							</button>
							<a href="mailto:mon_syndic@syndic.net">Envoyer au Syndic</a>
						</div>
					</div>
				</div>
			</div><!--
			-->

		</section>

	</div>


<!-- END PAGE CONTENT -->
<?php
	include 'footer.php';
	include '../modules/scripts_calls.php';
?>
</body>
</html>