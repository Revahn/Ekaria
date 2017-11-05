var canvasWidth = 600;
var canvasHeight = 450;
var autoActu = setInterval(actu_pickaria, 500);


function 	actu_pickaria()
{
	//console.log("Actualisation (js)");
	$("footer").load("/_modele/pickaria_get_code.php");
}

function 	sauv_pickaria()
{
	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext("2d");
	var nouveau_code = canvas.toDataURL();

	//console.log("Sauvegarde (js)");
	//console.log("CODE : "+nouveau_code);
	$("footer").load("/_modele/pickaria_set_code.php", {"code": nouveau_code});
}

$(".pickaria_btn_reset").click(function()
{
	$("footer").load("/_modele/pickaria_reset.php");
	actu_pickaria();
});
