/*
** Fonctions en rapport avec le dynamisme des pages
*/

function basename(str, sep) 
{
    return str.substr(str.lastIndexOf(sep) + 1);
}

//Cette fonction permet de changer le contenu d'une page sans la recharger entièrement.
function changer_page(page)
{
	var contenu = page + " article.contenu>*";

	$("article.contenu").hide();
	$("article.contenu").load(contenu);
	$("article.contenu").fadeIn(500);

	setCookie("ekaria_page_prec", page, "3600");
}

// Cette fonction ouvre une pop-up, utile pour par exemple la page de connexion ou un message admin...
function pop_up(page)
{
	var contenu = page + " article.contenu>*";

	$(".pop_up").hide();
	$(".pop_up").load(contenu);
	$(".pop_up").fadeIn(500, function()
		{
			$(".co_pseudo").focus();
		});
}

function fermer_pop_up()
{
	$(".pop_up").empty();
	$(".pop_up").hide();
}