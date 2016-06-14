<?php

include 'db_connect.php';

if(isset($_POST['add_coprop'])){
	$link=db_connect();
	if (! $link) {
		echo "could not connect";
	}
	else {
		$title=$_POST['title'];
		$address=$_POST['address'];
		$postal_code=$_POST['postal_code'];
		$city=$_POST['city'];
		$admin_id	=$_POST['user_id'];

		$insertion = mysql_query( "INSERT INTO coprops (title,address,postal_code,city, admin_id	) VALUES ('$title','$address','$postal_code', '$city', '$admin_id') ", $link );
		if(! $insertion){
			header ('location: ../views/creation_copropriete.php');
		}
		else{
			$inserted = mysql_query( "SELECT * FROM coprops ORDER BY id DESC LIMIT 1", $link );
			while ($row = mysql_fetch_assoc($inserted)) {
				$coprop_id = $row["id"];
			}
			header ("location: ../views/inviter_copros.php?coprop_id=".$coprop_id."");
		}
	}
}

?>