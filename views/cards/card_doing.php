<div class="card-wrapper">
	<!-- LEFT -->
	<div>
		<span class="state">En cours <?php if($current_user_id==$in_charge['id']){ echo "(moi)"; } ?></span>
		<?php include 'card_left.php'; ?>
<!-- RIGHT
--><div>
		<div>
			<p class="item-subtitle">Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
			<?php
				if ($current_user_id!=$in_charge['id']){
					echo "<img class='user-img' src='http://lorempixel.com/200/200/cats' alt='' /><h5 class='title'>".$in_charge['firstname']." ".$in_charge['name']."</h5>";
				}
				elseif($current_user_type=="admin"){
					echo "<button type='submit' value='Submit' class='submit req-update-status' data-new_state='done' data-req_id='".$request['id']."'>
					<i class='fa fa-check' aria-hidden='true'></i>
					</button>
					<button type='submit' value='Submit' class='cancel req-update-status-resp' data-new_state='todo' data-new_resp=0 data-req_id='".$request['id']."'>
					<i class='fa fa-times' aria-hidden='true'></i>
					</button>
					<a class='req-update-status' data-new_state='syndic' data-req_id='".$request['id']."' href='#envoyer_au_syndic'>Envoyer au Syndic</a>"; 
				}				
				else{
					echo "<button type='submit' value='Submit' class='submit req-update-status' data-new_state='done' data-req_id='".$request['id']."'>
					<i class='fa fa-check' aria-hidden='true'></i>
					</button>
					<button type='submit' value='Submit' class='cancel req-update-status-resp' data-new_state='todo' data-new_resp=0 data-req_id='".$request['id']."'>
					<i class='fa fa-times' aria-hidden='true'></i>
					</button>
					<a class='submit req-update-status' data-new_state='todo_admin' data-req_id='".$request['id']."' href='#envoyer_au_syndicat'>Envoyer au Conseil Syndical</a>"; 
				}
			?>
		</div>
	</div>
</div>