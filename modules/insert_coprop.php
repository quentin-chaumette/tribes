<?php

include 'db_connect.php';
include 'check_coprop_exist.php';

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

		if(check_coprop_exist($link, $title)){
			echo "coprop already exist";
			// if coprop exist give back error
		}	
		else{
			$insertion = mysqli_query($link, "INSERT INTO coprops (title,address,postal_code,city, admin_id) VALUES ('$title','$address','$postal_code', '$city', '$admin_id') " );
			$inserted = mysqli_query($link, "SELECT * FROM coprops ORDER BY id DESC LIMIT 1" );
			while ($row = mysqli_fetch_assoc($inserted)) {
				$coprop_id = $row["id"];
			}
			header ("location: ../views/inviter_copros.php?coprop_id=".$coprop_id."");
		}
	}
}

?>