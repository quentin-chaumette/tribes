<?php

include 'db_connect.php';

function get_requests($coprop_id){
	$link=db_connect();
	if (! $link) {
		//echo "could not connect";
	}
	else {
		$requests = mysql_query( "SELECT * FROM requests WHERE coprop_id=$coprop_id ORDER BY created_at Desc", $link );

		if (! $requests) {
			die('Could not get requests: ' . mysql_error());
		}
		else {
			return $requests;
		}
	}
}

?>