<?php

if (strpos(getcwd(), "_modele"))
	include_once("../init.php");

if (isset($_POST['message']) && isset($_SESSION))
{
	$message = $_POST['message'];
	$id_utilisateur = $_SESSION['id'];

	$args = array(
		'id_utilisateur' => $id_utilisateur, 
		'contenu' => $message
		);
	exec_sql("INSERT INTO chat(id_utilisateur, contenu) VALUES(:id_utilisateur, :contenu)", $args);
}

function echo_sure($var)
{

}

function 	aff_histo()
{
	global $bdd;

	$histo = exec_sql(
		"SELECT * FROM 
		(SELECT * FROM chat ORDER BY date DESC LIMIT 10) AS toto
		ORDER BY date");

	//var_dump($histo);
	if (isset($histo) && !empty($histo))
	{
	foreach ($histo as $message)
	{
		if (isset($message['id_utilisateur']))
		{
		$utilisateur = exec_sql("SELECT pseudo FROM utilisateur WHERE id=".$message['id_utilisateur']);
		$date = strtotime($message['date']);
		?>
			<p class="chat_de"><?=$utilisateur['pseudo']?> a écrit :</p>
			<p class="chat_msg"><?=$message['contenu']?></p>
			<p class="chat_date">Le <?=date('d M Y à H:i', $date)?></p>
		<?php
		}
	}
	}
}

?>