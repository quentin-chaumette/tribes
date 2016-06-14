<?php

function db_connect(){
/*
	$dbhost = 'localhost:3306';
	$link = mysql_connect($dbhost, 'root', 'root');
	mysql_query("SET NAMES 'utf8'", $link);
	mysql_select_db('tribes');
	if (! $link) {
		die('Could not connect: ' . mysql_error());
	}
	else {
		return $link;
	}
*/


	DEFINE('DB_USERNAME', 'root');
	DEFINE('DB_PASSWORD', 'root');
	DEFINE('DB_HOST', 'localhost:3306');
	DEFINE('DB_DATABASE', 'tribes');

	$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	else{
		return $link;
	}
}

?>