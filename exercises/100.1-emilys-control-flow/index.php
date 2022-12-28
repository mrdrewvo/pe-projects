<!doctype html>

<html lang="en">

	<head>

		<title>Hey Em!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="description" content="A portal page with links that Emily finds useful.">
		<!--get OG meta in here-->

		<!--google fonts Raleway & Crimson Text-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

		<link href="style.css" rel="stylesheet">

	</head>

	<body>
		<section class="welcome">
			<?php 

				date_default_timezone_set ('America/Vancouver');

				$time = date("H:i:s");

				$am = ("05:00:00" <= $time) && ($time <= "11:59:00");
				$pm = ("12:00:00" <= $time) && ($time <= "16:59:00");
				$eve = ("17:00:00" <= $time) && ($time <="21:59:00");

				if ($am) {
						echo "<h1>Good morning, Emily!</h1>";
					} elseif ($pm) {
						echo "<h1>Good afternoon, Emily!</h1>";
					} elseif ($eve) {
						echo "<h1>Good evening, Emily!</h1>";
					} else {
						echo "<h1>Go to bed, Emily!!</h1>";
					}
		
				?>
			<nav>
				<a href="https://www.gmail.com">Gmail</a>
				<a href="https://perpetual.education/design-for-the-web/">PE Lessons</a>
				<a href="https://peprojects.dev/alpha-6/">Alpha 6</a>
			</nav>
		</section>

		<section class="daily">
			<h2>wake up</h2>
			<ul>
				<li><a href="https://www.nytimes.com/games/wordle" target="_blank">Wordle</a></li>
				<li><a href="https://www.nytimes.com/puzzles/spelling-bee" target="_blank">Spelling Bee</a></li>
				<li><a href="https://www.nytimes.com">The New York Times</a></li>
			</ul>
		</section>

		<section class="web-design">
			<h2>web design resources</h2>

			<ul><h3>general</h3>
				<li><a href="https://codepen.io/your-work" target="_blank">CodePen</a></li>
				<li><a href="https://validator.w3.org/" target="_blank">Markup Validation Service</a></li>
				<li><a href="https://github.com/h5bp/html5-boilerplate/blob/main/docs/html.md" target="_blank">HTML boilerplate</a></li>
				<li><a href="https://www.sublimetext.com/docs/index.html" target="_blank">Sublime Text documentation</a></li>
			</ul>

			<ul><h3>forums</h3>
				<li><a href="https://discord.com/channels/541715824277192756/541735018683432962" target="_blank">CSS Discord</a></li>
				<li><a href="https://stackoverflow.com/" target="_blank">stackoverflow</a></li>
				<li><a href="https://dev.to/" target="_blank">Dev.to</a></li>
				<li><a href="https://www.codenewbie.org/" target="_blank">CodeNewbie</a></li>
			</ul>

			<ul><h3>fonts</h3>
				<li><a href="https://web.mit.edu/jmorzins/www/fonts.html" target="_blank">Safe web fonts</a></li>
				<li><a href="https://fonts.google.com/" target="_blank">Google fonts</a></li>
				<li><a href="https://www.typewolf.com" target="_blank">Typewolf</a></li>
			</ul>

			<ul><h3>colors</h3>
				<li><a href="https://enes.in/sorted-colors/" target="_blank">Sorted CSS colors</a></li>
			</ul>
		
		</section>

		<section class="puzzles">
			<h2>crossword puzzles</h2>

			<ul><h3>free</h3>
				<li><a href=""https://www.washingtonpost.com/crossword-puzzles/daily/" target="_puzzles">The Washington Post</a></li>
				<li><a href="https://www.theatlantic.com/free-daily-crossword-puzzle/" target="_puzzles">The Atlantic</a></li>
				<li><a href="https://www.latimes.com/games/daily-crossword" target="_puzzles" target="_puzzles">The L.A. Times</a></li>
				<li><a href="https://www.brendanemmettquigley.com/" target="_puzzles">Brendan Emmett Quigley</a></li>
			</ul>

			<ul><h3>paid</h3>
				<li><a href="https://www.nytimes.com/crosswords" target="_puzzles">The New York Times</a></li>
				<li><a href="https://avxwords.com/" target="_puzzles">AVCX</a></li>
				<li><a href="http://fireballcrosswords.com/" target="_puzzles">Fireball Crosswords</a></li>
				<li><a href="https://www.boswords.org" target="_puzzles">Boswords</a></li>
			</ul>
		</section>

		<section class="music">
			<h2>radio stations</h2>

			<ul>
				<li><a href="https://www.kexp.org" target="_radio">KEXP (Seattle)</a></li>
				<li><a href="https://xray.fm/" target="_radio">XRAY (Portland, OR)</a></li>
				<li><a href="https://koop.org/" target="_radio">KOOP (Austin)</a></li>
				<li><a href="https://wfmu.org/" target="_radio">WFMU (Jersey City, NJ)</a></li>
			</ul>
		</section>

		<section class="walking">
			<h2>walking paths</h2>

			<p><a href="https://en.wikipedia.org/wiki/List_of_long-distance_footpaths" target="_walks">master list</a></p>

			<ul><h3>United Kingdom</h3>
				<li><a href="https://www.nationaltrail.co.uk/" target="_walks">National Trails</a></li>
				<li><a href="https://en.wikipedia.org/wiki/List_of_long-distance_footpaths_in_the_United_Kingdom" target="_walks">List of long-distance footpaths in the UK</a></li>
			</ul>

			<ul><h3>Germany</h3>
				<li><a href="https://en.wikipedia.org/wiki/List_of_long-distance_footpaths#Germany" target="_walks">List of long-distance footpaths in Germany</a></li>
				<li><a href="https://bavaria.travel/listicles/long-distance-walking-trails/" target="_walks">Bavaria Travel - Long distance walking trails</a></li>
				</ul>

			<ul><h3>Italy</h3>
				<li><a href="https://en.wikipedia.org/wiki/List_of_long-distance_footpaths#Italy" target="_walks">List of long-distance footpaths in Italy</a></li>
				<li><a href="https://www.theguardian.com/travel/2020/jul/17/10-of-the-best-long-distance-walks-trails-in-italy" target="_walks">The Guardian - 10 of the best long-distance walking routes in Italy (2020)</a></li>
			</ul>
		</section>

		<footer>
			<a href="#top">back to the top</a>
		</footer>
	</body>

</html>
