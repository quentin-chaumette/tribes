<?php

function db_connect(){
	$dbhost = 'localhost:3306';
	$link = mysql_connect($dbhost, 'root', 'root');
	mysql_query("SET NAMES 'utf8'", $link);
	mysql_select_db('suw');
	if (! $link) {
		die('Could not connect: ' . mysql_error());
	}
	else {
		return $link;
	}
}

?>