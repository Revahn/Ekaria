<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>
		<article class="contenu">
			<div class="pan_profil">
				<a onclick="fermer_pop_up()" class="fermer_pop_up">X</a>
				<h2>Profil de <?=$_SESSION['pseudo']?></h2><br />
					<form method="POST" action="<?=MODELE?>gestion_ident.php?tag_ident=connexion">
						<a href="">Changer de mot de passe</a>

						<p>
							<a class="profil_stitre">Adresse mail : </a>
							<a class="profil_desc"><?=get_mail()?></a>
						</p>
						
						<p>
							<a class="profil_stitre">Avatar: </a>
							<img class="profil_avatar" src=""/>
						</p>

						<p>
							<a class="profil_stitre">Inscrit à la newsletter : </a>
							<input type="checkbox" name="profil_newsletter">
						</p>
						
						<p>
							<a class="profil_stitre">Date d'inscription : </a>
							<a class="profil_insc"><?=get_insc()?></a>
						</p>

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