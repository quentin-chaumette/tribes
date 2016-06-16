<?php

function db_connect(){

	$DB_USERNAME='root';
	$DB_PASSWORD='root';
	$DB_HOST='localhost:3306';
	$DB_DATABASE='tribes';

	$link = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

	if (mysqli_connect_error()) {
		die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	}
	else{
		mysqli_set_charset($link,"utf8");
		return $link;
	}
}

?>