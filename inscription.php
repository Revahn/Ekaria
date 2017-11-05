<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>
		<article class="contenu">
				<div class="pan_inscription">
					<br />
					<h2>Inscription</h2><br />
					<form method="POST" action="<?=MODELE?>gestion_ident.php?tag_ident=inscription">
					<table class="tab_insc">
						<tr>
							<td class="titre_insc"><a>Pseudo</a></td>
							<td><input type="text" name="pseudo" class="insc_pseudo" autofocus></td>
						</tr>
						<tr>
							<td class="titre_insc"><a>Adresse mail</a></td>
							<td><input type="text" name="mail" class="insc_mail"></td>
						</tr>
						<tr>
							<td class="titre_insc"><a>Mot de passe</a></td>
							<td><input type="password" name="mdp" class="insc_mdp"></td>
						</tr>
						<tr>
							<td class="titre_insc"><a>Valider le mot de passe</a></td>
							<td><input type="password" name="mdp2" class="insc_mdp2"></td>
						</tr>
						<tr>
							<td class="titre_insc"></td>
							<td></td>
						</tr>

						<tr><td colspan="2" class="val_insc"><input type="submit" value="S'inscrire"></td></tr>

					</table>
						
					<?php
					if (isset($_GET['erreur']) && $_GET['erreur'] == 1)
					{
						?><br /><a class="erreur">Erreur lors de l'inscription!</a><?php
					}
					?>
					</form>
				</div>
		</article>
		<?php include_once("chat.php"); ?>
	</body>
	<?php include_once("footer.php"); ?>
</html>