<?php
	include 'views/html_head_index.php';
	echo "<body>";
	include 'views/header_index.php';
?>
<!-- PAGE CONTENT -->

	<div id="home">
    <section class="landing">
      <h1 class="title">Rejoignez Tribes !</h1>
      <h2 class="title">L’outil de collaboration entre copropriétaires.  </h2>
      <p>Tribes permet aux copropriétaires de collaborer en toute simplicité, de centraliser leurs documents et d’optimiser leurs charges de copropriété.</p>
      <div class="btn-red">
        <a href="views/inscription.php">Essayer gratuitement</a>
      </div>
    </section>
    <a href="#copro" class="more"><span>En savoir plus</span><i class="fa fa-angle-down" aria-hidden="true"></i></a>

    <section id="copro" class="content-container">
      <h3 class="title">Votre copropriété</h3>
      <p class="content content-container">Tribes est la solution qui permet a votre copropriété de perdurer en favorisant l’échange au travers d’un interface simple à prendre en main.</p>
      <ul>
        <li><div class="wrap"><img src="assets/img/copro1.png" alt="Centralisation des documents"><p>Centralisation des documents et signature électronique</p></div></li>
        <li><div class="wrap"><img src="assets/img/copro2.png" alt="Entraide et échanges"><p>Entraide et échanges entre copropriétaires</p></div></li>
        <li><div class="wrap"><img src="assets/img/copro3.png" alt="Suivi et optimisation des charges"><p>Suivi et optimisation des charges énergetiques</p></div></li>
      </ul>
    </section>

    <section id="solution" class="content-container">
      <div class="content-container">
        <img src="assets/img/screen.png" alt="La plateforme Tribes">
      </div>
      <div class="content-container">
        <h3 class="title">La solution en ligne de collaboration entre copropriétaires testé et approuvée</h3>
        <ul>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Système de remontée des signalements </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Centralisation des documents de la copropriété </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Système de signature électronique </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Visualisation et prédiction des tendances de votes au tantième </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Tableau de bord des dépenses et balance des comptes. </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Suivi des dépenses par catégories </li>
          <li><i class="fa fa-circle" aria-hidden="true"></i>Suggestions d’optimisation des dépenses et de réduction des charges énergétiques.</li>
        </ul>
      </div>
    </section>
	</div>

<!-- END PAGE CONTENT -->
<?php
	include 'views/footer.php';
	include 'modules/scripts_calls.php';
?>
</body>
</html>