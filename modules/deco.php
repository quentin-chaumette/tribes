<?php
	setcookie("current_user_type", "", -10);  // destroy
	setcookie("current_user_id", "", -10);  // destroy
	setcookie("coprop_id", "", -10);  // destroy
	header ("location: ../views/connexion.php");
?>