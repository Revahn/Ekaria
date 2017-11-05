<?php
	include_once("../init.php");

	$code = get_code();
?>

<script type="text/javascript">
	//console.log("Réception du code (php)!");

	var canvas = document.getElementById('canvas');
	var ctx = canvas.getContext("2d");

	var code = "<?=$code?>";

	//console.log(code);

	if (code)
	{
		var image = new Image();
		image.src = code;
		image.onload = function()
		{
			ctx.drawImage(image, 0, 0, canvasWidth, canvasHeight);
		};
	}
	else
		ctx.clearRect(0, 0, canvas.width, canvas.height);

	//console.log("Fin!");
</script>