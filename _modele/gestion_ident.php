<?php

include_once("../init.php");
include_once("gestion_bdd.php");
include_once("classes.php");

$tag_ident = ((isset($_GET['tag_ident'])) ? $_GET['tag_ident'] : 0);

if ($tag_ident == "connexion")
{
	se_connecter();
}
else if ($tag_ident == "deco")
{
	se_deconnecter();
}
else if ($tag_ident	== "inscription")
{
	s_inscrire();
}

function 	se_connecter()
{
	if (isset($_POST['pseudo']) && isset($_POST['mdp']))
	{
		$post = array('pseudo' => $_POST['pseudo'], 'mdp' => md5($_POST['mdp']));
		$u_post = Utilisateur::construct_array($post);

		$test_bdd = exec_sql("SELECT id, pseudo, mdp FROM utilisateur \nWHERE pseudo=:pseudo AND mdp=:mdp", $post);
		$u_bdd = Utilisateur::construct_array($test_bdd);

		$u_post->__set("id", $u_bdd->__get("id"));

		echo "_POST<br />";
		$u_post->aff();
		echo "<br />BDD<br />";
		$u_bdd->aff();

		// Si ce que rentre l'utilisateur correspond à un élément de la bdd, lancer la connexion
		if ($u_post == $u_bdd)
		{
			session_start();
			$_SESSION['id'] = $u_bdd->__get("id");
			$_SESSION['pseudo'] = $u_bdd->__get("pseudo");
			$_SESSION['mdp'] = $u_bdd->__get("mdp");
			exec_sql("UPDATE utilisateur SET date_co=NOW() WHERE id=".$u_bdd->__get("id"));
			header('location: ../index.php');
		}
		else
		{
			header('location: ../connexion.php?erreur=1');
		}
	}
}

function 	se_deconnecter()
{
	session_unset();
	session_destroy();
	header('location: ../index.php');
}

function 	s_inscrire()
{
	$post = array
	(
		'pseudo' => $_POST['pseudo'], 
		'mdp' => md5($_POST['mdp']),
		'mail' => $_POST['mail']
	);
	$u_post = Utilisateur::construct_array($post);

	$u_post->aff();

	$mdp2 = md5($_POST['mdp2']);

	if ($u_post->__get("mdp") === $mdp2)
	{
		exec_sql("INSERT INTO utilisateur(pseudo, mdp, mail) \n VALUES(:pseudo, :mdp, :mail)", $post);
		header('location: ../index.php');
		return true;
	}
	else
	{
		header('location: ../inscription.php?erreur=1');
		return false;
	}
}

?>