<?php
	include_once("../init.php");
?>

<!--script type="text/javascript" src="pixi.min.js"></script-->
<script type="text/javascript" src="hexi.min.js"></script>
<!--script type="text/javascript" src="modules.js"></script>
<script type="text/javascript" src="core.js"></script>
<script type="text/javascript" src="malib.js"></script-->



<!--article class="contenu train">
<div class="train_fen"-->
<script type="text/javascript">

	//An array of files you want to load
	let thingsToLoad = 
	[
		"_sources/logo.png",
		"_sources/troll.png",
		"_sources/fond.jpg",
		"_sources/music/trololo.mp3"
	];

	let g = hexi(640, 480, setup, thingsToLoad, load);
	g.fps = 30;
	g.border = "2px red dashed";
	g.backgroundColor = 0x000000;
	g.start();

	function load()
	{
		//console.log(`loading: ${g.loadingFile}`); 
		//console.log(`progress: ${g.loadingProgress}`);

		//Display an optional loading bar
		g.loadingBar();
	}

	let trolls, message;

	function setup()
	{
		//Create your game objects here
		trolls = g.group();

		message = g.text("Coucou, clique pour voir!", "20px Verdana", "white");
		g.stage.putCenter(message);

		let makeTroll = (x, y) => {
			let troll = g.sprite("_sources/troll.png");

			troll.width = 64;
			troll.height = 64;
			troll.setPosition(x, y);

			g.breathe(troll, 0.8, 0.8, 50);
	  		//g.pulse(troll, 0.5, 0.5);

	  		troll.vx = g.randomInt(-50, 50);
	 		troll.vy = g.randomInt(-50, 50);

	 		trolls.addChild(troll);
		};

		// Crée un troll là où l'utilisateur a cliqué.
		g.pointer.tap = () => {
			makeTroll(g.pointer.x, g.pointer.y);


			let music = g.sound("_sources/music/trololo.mp3");
			music.volume = 0.05;
			music.loop = true;
			music.play();
		};

  		//Set the game state to `play` to start the game loop
		g.state = play;
	}

	function play()
	{
		//This is your game loop, where you can move sprites and add your game logic

  		trolls.children.forEach(troll => {

	    //Make the troll bounce off the screen edges
	    let collision = g.contain(troll, g.stage, true);

	    //Move the troll
	    g.move(troll);
  		});
	}

</script>
<!--/div>
</article-->