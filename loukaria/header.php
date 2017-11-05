<header>
	<h1><a href="index.php">LOUKARIA</a></h1>

	<div class="profil">
	<?php
		if (isset($_SESSION['pseudo']) && isset($_SESSION['mdp']))
		{
			?>
			<div class="tab_profil">
			<h3>Bienvenue, <?=$_SESSION['pseudo']?>!</h3>
			<a onclick="pop_up('profil.php')">Voir profil</a>
			|
			<a href="<?=MODELE?>gestion_ident.php?tag_ident=deco">Se déconnecter</a>
			<div class="defil_profil"></div>
			</div>
			<?php
		}
		else
		{
			?>
			<a onclick="pop_up('connexion.php')">Se connecter</a>
			|
			<a href="inscription.php">S'inscrire</a>
			<?php
		}
	?>
	</div>
</header>