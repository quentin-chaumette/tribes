<div class="card-wrapper">
	<!-- LEFT -->
	<div>
		<span class="state">À Faire</span>
		<?php include 'card_left.php'; ?>
<!-- RIGHT
	-->
	<div>
		<div>
			<?php
				if($current_user_type=='normal'){
				echo "
					<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
					<button type='submit' value='Submit' class='req-update-status-resp' data-new_state='doing' data-new_resp=".$current_user_id." data-req_id='".$request['id']."'>
						<i class='fa fa-thumbs-up' aria-hidden='true'></i>
						Je prends
					</button>
					";
				}
				elseif($current_user_type=='admin'){
				echo "
					<p class='item-subtitle'>Ne laissons pas le Syndic nous facturer 5 fois plus cher !</p>
					<button type='submit' value='Submit' class='req-update-status-resp' data-new_state='todo_admin' data-new_resp=".$current_user_id." data-req_id='".$request['id']."'>
						<i class='fa fa-thumbs-up' aria-hidden='true'></i>
						Je prends
					</button>
					<a class='req-update-status' data-new_state='syndic' data-req_id='".$request['id']."' href='#envoyer_au_syndic'>Envoyer au Syndic</a>
					";
				}
			?>
		</div>
	</div>
</div>