<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>The Aviator: The Game | Codrops</title>
		<meta name="description" content="Demo of the game: The Making of 'The Aviator': Animating a Basic 3D Scene with Three.js" />
		<meta name="keywords" content="three.js, webgl, tutorial, game, 3d, animation, airplane, web development, javascript" />
		<meta name="author" content="Karim Maaloul for Codrops" />
		<link rel="shortcut icon" href="favicon.ico">
		<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/game.css" />
		<script type="text/javascript" src="js/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/three.min.js"></script>
		<script type="text/javascript" src="js/game.js" ></script>
		<!--[if IE]>
		  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="game-holder" id="gameHolder">
			<div class="header">
				<h1><span>the</span>Aviator</h1>
				<h2>fly it to the end</h2>
				<div class="score" id="score">
					<div class="score__content" id="level">
						<div class="score__label">level</div>
						<div class="score__value score__value--level" id="levelValue">1</div>
						<svg class="level-circle" id="levelCircle" viewbox="0 0 200 200">
							<circle id="levelCircleBgr" r="80" cx="100" cy="100" fill="none" stroke="#d1b790" stroke-width="24px" />
							<circle id="levelCircleStroke" r="80" cx="100" cy="100" fill="none" #f25346 stroke="#68c3c0" stroke-width="14px" stroke-dasharray="502" />
						</svg>
					</div>
					<div class="score__content" id="dist">
						<div class="score__label">distance</div>
						<div class="score__value score__value--dist" id="distValue">000</div>
					</div>
					<div class="score__content" id="energy">
						<div class="score__label">energy</div>
						<div class="score__value score__value--energy" id="energyValue">
							<div class="energy-bar" id="energyBar"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="world" id="world"></div>
			<div class="message message--replay" id="replayMessage">Click to Replay</div>
			<div class="message message--instructions" id="instructions">Grab the blue pills<span>avoid the red ones</span></div>
		</div>
		<!-- Demo links -->
		<nav class="meta">
			<a class="codrops-icon codrops-icon--prev" href="http://tympanus.net/Development/Interactive3DMallMap/" title="Previous Demo"><span>Previous Demo</span></a>
			<a class="codrops-icon codrops-icon--drop" href="http://tympanus.net/codrops/?p=26501" title="Back to the article"><span>Back to the Codrops article</span></a>
			<a class="demo-link" href="part1.html">Part 1</a>
			<a class="demo-link" href="part2.html">Part 2</a>
		</nav>
		<div class="partisan">
			<svg class="partisan__bg" viewBox="0 0 500 188" preserveAspectRatio="none" width="100%" height="100%" aria-hidden="true">
				<polygon points="0 154 123.39 0 235.78 14.79 365.6 28.9 436.24 114.93 500 188 0 188 0 154" fill="#bed730"/>
				<polygon points="0 188 108.84 18.17 347.91 26.79 500 188 365.6 28.9 123.39 0 0 154 0 188" fill="#dde465"/>
			</svg>
			<a class="partisan__link" href="https://goo.gl/oECseP" rel="nofollow">
				<img class="partisan__img" src="img/Partisan_Bushel.png" alt="Bushel: Easily manage all your Apple devices at work"/>
				<h3 class="partisan__title">Bushel: Easily manage all your Apple devices at work</h3>
			</a>
		</div>
	</body>
</html>
