<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
	include 'left_navbar.php';
	include '../modules/get_requests.php';
?>
<!-- PAGE CONTENT -->

<div class="overlay">
	<div class="modal">
		<i class="fa fa-times close" aria-hidden="true"></i>
		<h1 class="title">Créer une nouvelle requête</h1>
		<p>Votre appartement : </p> <span> Bâtiment B - 308</span>
		<form action="POST">
			<input class="input-object" type="text" placeholder="Description en une phrase..." maxlength="50"><div class="count"><span class="counter">0</span>/50</div>
			<textarea class="text-content" name="textarea" id="" cols="30" rows="10" placeholder="Dites-en plus..." maxlength="150"></textarea><div class="count"><span class="counter2">0</span>/50</div>
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

		<!-- CARD : ADMIN que quelqu'un a posté, qui n'est pas encore prise "À prendre" ADD CLASS = toTake-->
		<div class="card toTake">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">À faire</span>
					<span>il y a 2 minutes</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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



		--><!-- CARD : ADMIN que quelqu'un a posté, qui n'est pas encore prise "À prendre" ADD CLASS = toTake--><div class="card toTake">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Vous</span>
					<span>il y a 5 heures</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : que l'ADMIN a choisi de faire "À faire", ADD CLASS = toDo--><div class="card toDo">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Vous</span>
					<span>il y a 5 heures</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<button type="submit" value="Submit" class="submit">
							<i class="fa fa-check" aria-hidden="true"></i>
						</button>
						<button type="submit" value="Submit" class="cancel">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<a href="mailto:mon_syndic@syndic.net">Envoyer au Syndic</a>
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : que le USER a choisi de faire "À faire", ADD CLASS = toDo--><div class="card toDo">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Vous</span>
					<span>il y a 5 heures</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<button type="submit" value="Submit" class="submit">
							<i class="fa fa-check" aria-hidden="true"></i>
						</button>
						<button type="submit" value="Submit" class="cancel">
							<i class="fa fa-times" aria-hidden="true"></i>
						</button>
						<a href="mailto:mon_syndic@syndic.net">Envoyer au Conseil Syndical</a>
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : ADMIN a choisi de faire "En cours", ADD CLASS = doing
		--><div class="card doing">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">En cours</span>
					<span>il y a 2 jours</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<img class="user-img" src="http://lorempixel.com/200/200/cats" alt="">
						<h5 class="title">Jean-Paul-Eude</h5>
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : qu'un user a fait "Résolue", ADD CLASS = done
		--><div class="card done">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Résolue !</span>
					<span>il y a 2 jours</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<i class="fa fa-check-circle" aria-hidden="true"></i>
						<h5 class="title">Jean-Paul-Eude</h5>
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : qu'un USER a envoyé au CONSEIL SYNDICAL, ADD CLASS = attribute
		--><div class="card attribute">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Transmise</span>
					<span>il y a 2 jours</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
						<h5 class="title">Attribuée au Conseil Syndical</h5>
					</div>
				</div>
			</div>
		</div><!--
		--><!-- CARD : qu'un ADMIN a envoyé au SYNDIC, ADD CLASS = attribute
		--><div class="card attribute">
			<div class="card-wrapper">
				<!-- LEFT -->
				<div>
					<span class="state">Transmise</span>
					<span>il y a 2 jours</span>
					<span class="more"> Voir plus</span>
					<span class="less">Voir moins</span>
					<h4 class="content">Problème matériel d’une ampoule au rez-de-chaussée.</h4>
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
						<i class="fa fa-paper-plane" aria-hidden="true"></i>
						<h5 class="title">Attribuée au Syndic</h5>
					</div>
				</div>
			</div>
		</div><!--
		-->

		<button type="submit" value="Submit" class="btn-blue add-card">+ Ajouter une requête</button>

	</section>
</div>


<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>