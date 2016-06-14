<?php

include 'db_connect.php';

function get_circles(){
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else {
		$circles = mysql_query( "SELECT * FROM circles ORDER BY title Desc", $link );

		if (! $circles) {
			die('Could not get circles: ' . mysql_error());
		}
		else {
			return $circles;
		}
	}
}

?>