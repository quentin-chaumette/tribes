<?php

$url = $_SERVER['REQUEST_URI'];

?>

<nav class="nav">
  <ul>
  <!-- <?php echo $url = "path/" ? 'active' : '' ?> Pour la class active -->
    <li>
      <a href="dashboard.php" class="<?php echo $url = "tribes/views/dashboard.php" ? 'active' : '' ?>">
        <i class="fa fa-home" aria-hidden="true"></i>
        <p>Ma Copro</p>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-lightbulb-o" aria-hidden="true"></i>
        <p>Le Syndic</p>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="fa fa-cogs" aria-hidden="true"></i>
        <p>Paramètres</p>
      </a>
    </li>
    <li><a href="../modules/deco.php"><i class="fa fa-sign-out" aria-hidden="true"></i><p>Déconnexion</p></a></li>
  </ul>

</nav>