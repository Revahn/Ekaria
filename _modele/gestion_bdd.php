<?php

// Connect_db: permet de se connecter à une base de données postgreSQL.
function 	connect_db()
{
	global $bdd;
	
	$pdo = SGBD.':host='.HOST.';dbname='.DB_NAME;
	if (!isset($bdd))
	{
		try
		{
			$bdd = new PDO($pdo, USER, PWD);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		}
		catch (Exception $e)
		{
			?>
			<script type="text/javascript">
				console.log(<?="\"ERREUR LORS DE LA CONNEXION AU SERVEUR\""?>);
				console.log(<?="\"".$e->getMessage()."\""?>);
			</script>
			<?php
			die();
		}
	}
	return $bdd;
}

function 	exec_sql($requete, $args = NULL)
{
	global $bdd;
	$reponse = NULL;
	$requete = $bdd->prepare($requete);
	
	$requete->execute($args);
	$reponse = $requete->fetchAll();

	if (isset($reponse) && !empty($reponse))
	{
		if (sizeof($reponse) == 1)
			$reponse = $reponse[0];
		return $reponse;
	}
	else
		return NULL;
}

function 	get_mail()
{
	$id_utilisateur = $_SESSION['id'];

	$mail = exec_sql("SELECT mail FROM utilisateur WHERE id=".$id_utilisateur);
	$mail = $mail['mail'];

	return $mail;
}

function 	get_insc()
{
	$get_date = exec_sql("SELECT date_inscription FROM utilisateur WHERE id=".$_SESSION['id']);
	$get_date = strtotime($get_date['date_inscription']);

	$date_insc = date('d M Y à H:i:s', $get_date);

	return $date_insc;
}

function 	get_code()
{
	$get_code = exec_sql("SELECT code FROM pickaria WHERE id=1");

	$code = $get_code['code'];

	return $code;
}

function 	get_utilisateur($id)
{
	$reponse = exec_sql("SELECT pseudo FROM utilisateur WHERE id=".$id);

	return $reponse['pseudo'];
}

function 	formater_date($time)
{
	$date = new DateTime($time);

	return $date->format("d M Y à H:i");
}

// Affiche les dernières news en fonction du module indiqué (ekaria, loukaria, pickaria...)
// !!! Si il n'y a qu'une annonce ça buggera!
function 	aff_news($module)
{
	$liste_annonces = exec_sql("SELECT * FROM annonce ORDER BY date_creation DESC");
	?> <div class="pan_annonces"> <br /> <?php
	if (!empty($liste_annonces))
	{
		/*print_r($liste_annonces);
		$liste_annonces*/
		foreach ($liste_annonces as $annonce)
		{
			?>
			<div class="annonce">
				<h1 class="annonce_titre"><?=$annonce['titre']?></h1><br />

				<p class="annonce_contenu"><?=$annonce['contenu']?></p> <br />

				<p class="annonce_pied">
				Par 
				<a class="annonce_annonceur">
				<?=get_utilisateur($annonce['id_annonceur'])?> </a>
				le 
				<a class="annonce_date">
				<?=formater_date($annonce['date_creation'])?>
				</a>.
				<br />
				Mis à jour le 
				<a class="annonce_date">
				<?=formater_date($annonce['date_modif'])
				?>
				</a>.
				<br />
				<a class="annonce_commentaires" href="">
				0 commentaires
				</a>
				</p>
			</div>
			<?php
		}
	}
	else
		echo "Aucune annonce. Désolé!";
	?> </div> <?php
}

function 	is_admin($id)
{
	$admin = exec_sql("SELECT admin FROM utilisateur WHERE id=".$id);

	return $admin['admin'];
}

?>