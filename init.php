<?php
	// Partie "Projets"
	define("EKARIA", "/");
	define("LOUKARIA", EKARIA."/loukaria/");

	// Partie "Modèle"
	define("SOURCES", EKARIA."_sources/");
	define("SCRIPTS", EKARIA."_scripts/");
	define("MODELE", EKARIA."_modele/");

	// Partie BDD
	define("SGBD", 		"pgsql");
	define("HOST", 		"localhost");
	define("DB_NAME", 	"ekaria");
	define("USER", 		"ekaria");
	define("PWD", 		"foPeka1993*");

	// Donne le fichier courant
	define("F_COURANT", basename($_SERVER['PHP_SELF']));

	include_once(MODELE."gestion_bdd.php");
	$bdd = connect_db();
	session_start();
	date_default_timezone_set('Europe/Paris');
?>