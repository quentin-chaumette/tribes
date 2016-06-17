			<?php
	include '../modules/db_connect.php';
	include '../modules/get_requests.php';
	include '../modules/get_user.php';				
				$coprop_id = 1;			// to dynamise cookie connexion
				$current_user_type = 'admin';		// to dynamise cookie connexion
				$current_user_id=1;
				$requests_sql = get_requests($coprop_id);
				while($request = mysqli_fetch_assoc($requests_sql)){
					$author=get_user($request['author_id']);
					$in_charge=get_user($request['in_charge_id']);

					if($request['status']=="todo"){
						echo "<div class='card toTake'>";
						include 'cards/card_todo_initial.php';
						echo "</div>";
					}
					elseif($request['status']=="todo_admin"){
						if($current_user_type=='admin'){
							echo "<div class='card toDo'>";
						}
						elseif($current_user_type=='normal'){
							echo "<div class='card attribute'>";
						}
						include 'cards/card_todo_admin.php';
						echo "</div>";			
					}					
					elseif ($request['status']=="doing") {
						if($current_user_id==$request['in_charge_id']){
							echo "<div class='card toDo'>";
						}
						elseif($current_user_type=="admin"){
							echo "<div class='card doing'>";
						}						
						else{
							echo "<div class='card doing'>";
						}						
						include 'cards/card_doing.php';
						echo "</div>";
					}
					elseif ($request['status']=="syndic") {
						echo "<div class='card attribute'>";
						include 'cards/card_syndic.php';
						echo "</div>";
					}					
					elseif ($request['status']=="done") {
						echo "<div class='card done'>";
						include 'cards/card_done.php';
						echo "</div>";
					}
				}
			?>
		<button type="submit" value="Submit" class="btn-blue add-card">+ Ajouter une requête</button>