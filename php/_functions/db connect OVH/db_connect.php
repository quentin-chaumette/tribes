<?php

function db_connect(){
	$dbhost = 'mysql51-135.perso';
	$link = mysql_connect($dbhost, 'quentincvhpro', 'kentcho8');
	mysql_query("SET NAMES 'utf8'", $link);
	mysql_select_db('quentincvhpro');
	if (! $link) {
		die('Could not connect: ' . mysql_error());
	}
	else {
		return $link;
	}
}

?>