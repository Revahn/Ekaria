<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>

<article class="contenu accueil">
	
	<div class="liste_applis">
	<table>
		<tr>
			<td class="appli">
			</td>

			<td class="appli">
				<div class="loukaria" title="Loukaria" 
				onclick="document.location.href = 'loukaria/'">
				<img alt="Loukaria" src="<?=SOURCES?>logo_loukaria.png">
				</div>
				<a>Loukaria</a>
			</td>

			<td class="appli">
				<div class="pickaria" title="Pickaria"
				onclick="document.location.href = 'pickaria/'">
				<img alt="Pickaria" src="<?=SOURCES?>logo_pickaria.png">
				</div>
				<a>Pickaria</a>
			</td>
			
			<td class="appli">
			</td>
		</tr>
		<tr>
			<td class="appli">
			</td>

			<td class="appli">
				<div class="mario" title="Mario" 
				onclick="document.location.href = 'infinite_mario/'">
				<img alt="Mario" src="<?=SOURCES?>logo_mario.png">
				</div>
				<a>Infinite Mario</a>
			</td>

			<td class="appli">
				<div class="train_trolls" title="Train de Trolls"
				onclick="document.location.href = 'train_trolls/'">
				<img alt="Train de Trolls" src="train_trolls/_sources/troll.png"></div>
				<a>Train de Trolls</a>
			</td>

			<td class="appli">
			</td>
		</tr>
		<tr>
			<td class="appli">
			</td>

			<td class="appli">
				<div class="cineria" title="Cineria"
				onclick="document.location.href = 'loukaria/'">
				<img alt="Cineria" src="<?=SOURCES?>logo_cineria.png"></div>
				<a>Cineria</a>
			</td>
			
			<td class="appli">
				<div class="train" title="Entrainement"
				onclick="document.location.href = 'train/'">
				<img alt="Entrainement" src="<?=SOURCES?>logo_train.png"></div>
				<a>Entrainement</a>
			</td>

			<td class="appli">
			</td>
		</tr>
	</table>
	</div>
</article>

	<?php include_once("chat.php"); ?>
	</body>
	<?php include_once("footer.php"); ?>
</html>