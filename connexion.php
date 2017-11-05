<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>
		<article class="contenu">
				<div class="pan_connexion">
				<a onclick="fermer_pop_up()" class="fermer_pop_up">X</a>
					<br />
					<h2>Connexion</h2><br />
					<form method="POST" action="<?=MODELE?>gestion_ident.php?tag_ident=connexion">
						<a>Pseudo</a><br />
						<input type="text" name="pseudo" class="co_pseudo"><br /><br />
							
						<a>Mot de passe</a><br />
						<input type="password" name="mdp" class="co_mdp"><br /><br />

						<input type="submit" value="Se connecter">
						<?php
						if (isset($_GET['erreur']) && $_GET['erreur'] == 1)
						{
							?><br /><a class="erreur">Mauvais pseudo ou mot de passe!</a><?php
						}
						?>
					</form>
				</div>
		</article>
		<?php include_once("chat.php"); ?>
	</body>
	<?php include_once("footer.php"); ?>
</html>