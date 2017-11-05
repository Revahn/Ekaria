<!DOCTYPE HTML>
<html>
	<?php include_once("init.php") ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>
		<?php 
		if (isset($_COOKIE['ekaria_page_prec']) 
			AND !empty($_COOKIE['ekaria_page_prec']) 
			AND $_COOKIE['ekaria_page_prec'] !== "index.php")
			include_once($_COOKIE['ekaria_page_prec']);
		else
			include_once("accueil.php");
		?>
		<?php
			include_once("chat.php");
		?>

		<?php include_once("footer.php"); ?>
	</body>
</html>