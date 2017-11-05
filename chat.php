<?php include_once("init.php") ?>




		<aside class="chat">
			<div class="histo">
				<?php 
					include_once(MODELE."gestion_chat.php");
					aff_histo();
				?>
			</div>
			<input class="mess_entrant" type="text" name="message" 
			onchange="envoyer_msg();" autocomplete="off" autofocus />
		</aside>
