<footer>
		<a>2017 Youpidou prod</a>
		<?php
		if (isset($_SESSION) && isset($_SESSION["id"]) 
			&& is_admin($_SESSION["id"]))
		{
		?>
		<a class="btn_admin" href="">Panneau d'administration</a>
		<?php
		}
		?>
</footer>
<div class="pop_up">

</div>