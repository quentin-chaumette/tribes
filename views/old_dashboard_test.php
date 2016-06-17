<?php
	include 'html_head.php';
	echo "<body>";
	include 'header.php';
	include 'left_navbar.php';
	include '../modules/db_connect.php';
	include '../modules/get_requests.php';
	include '../modules/get_user.php';
?>
<!-- PAGE CONTENT -->

<!-- <div class="overlay"> -->
	<div class="container" id="dashboard">
		<nav class="nav-sort">
			<ul>
				<li><a href="#" class="title active">Tout voir</a></li>
				<li><a href="#" class="title">Non traitées</a></li>
				<li><a href="#" class="title">En cours</a></li>
				<li><a href="#" class="title">Terminées</a></li>
				<li><a href="#" class="title">Attribuées</a></li>
			</ul>
		</nav>

		<section class="requests content-container">
			<?php
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

				/*
				include 'cards/card_todo_admin_someone.php';
				include 'cards/card_todo_admin_you.php';
				include 'cards/card_todo_admin_toyou.php';
				include 'cards/card_todo_user_you.php';
				include 'cards/card_doing.php';
				include 'cards/card_done.php';
				include 'cards/card_todo_user_admin.php';
				include 'cards/card_todo_syndic.php';
				*/
			?>
			<button type="submit" value="Submit" class="add-card">+ Ajouter une requête</button>
		</section>
	</div>
<!-- </div> -->

<!-- END PAGE CONTENT -->
<?php
	include '../modules/scripts_calls.php';
?>
</body>
</html>