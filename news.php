<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>
		<article class="contenu">
			<?php
				aff_news("ekaria");
			?>
		</article>
		<?php include_once("chat.php"); ?>
	</body>
	<?php include_once("footer.php"); ?>
</html>