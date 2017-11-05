defiler_chat();
var autoActu = setInterval(actualiser_chat, 1000);

function	defiler_chat()
{
	//animate({ scrollTop: $(".chat .histo").height() }, 1000)
	$(".chat .histo").scrollTop(1000);
}

function 	actualiser_chat()
{
	//console.log("Actualisation...");
	$(".chat .histo").val('');
	$(".chat .histo").load("/chat.php .chat .histo>*");
	defiler_chat();
}

function 	envoyer_msg()
{
	$msg = $(".mess_entrant").val();
	$(".chat .mess_entrant").val('');
	$.ajax(
	{
    	type: 'POST',
    	url: '/_modele/gestion_chat.php',
    	data: 'message='+$msg
    });
	//$("footer").load("_modele/gestion_chat.php");
	actualiser_chat();
}