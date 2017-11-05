<?php include_once("init.php") ?>

<!DOCTYPE html>
<html>
	<?php include_once("init.php"); ?>
	<?php include_once("head.php"); ?>
	<body>
		<?php include_once("header.php"); ?>
		<?php include_once("nav.php"); ?>

<article class="contenu">
	<div class="pan_don">
		<div class="intro">
			<h3>Aidez le site à se développer!</h3>
		</div>
		<div class="module_dons">
			<a class="erreur">Attention, ce bouton n'est pas encore fonctionnel...</a>
			<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
			<input type='hidden' value="Montant_Achat" name="amount" />
			<input name="currency_code" type="hidden" value="EUR" />
			<input name="shipping" type="hidden" value="0.00" />
			<input name="tax" type="hidden" value="0.00" />
			<input name="return" type="hidden" value="http://votredomaine/paiementValide.php" />
			<input name="cancel_return" type="hidden" value="http://votredomaine/paiementAnnule.php" />
			<input name="notify_url" type="hidden" value="http://votredomaine/validationPaiement.php" />
			<input name="cmd" type="hidden" value="_xclick" />
			<input name="business" type="hidden" value="votre_emailtest_biz@domaine" />
			<input name="item_name" type="hidden" value="Nom de votre produit" />
			<input name="no_note" type="hidden" value="1" />
			<input name="lc" type="hidden" value="FR" />
			<input name="bn" type="hidden" value="PP-BuyNowBF" />
			<input name="custom" type="hidden" value="ID_ACHETEUR" />
			<input alt="Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée" name="submit" src="https://www.paypal.com/fr_FR/FR/i/btn/btn_donate_LG.gif" type="image" /><img src="https://www.paypal.com/fr_FR/i/scr/pixel.gif" border="0" alt="" width="1" height="1" />
			</form>
		</div>
	</div>
</article>

		<?php include_once("chat.php"); ?>
	</body>
	<?php include_once("footer.php"); ?>
</html>