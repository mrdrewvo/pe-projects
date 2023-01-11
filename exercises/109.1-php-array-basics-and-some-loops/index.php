<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>109.1 PHP Loop Milestone</title>
		
		<!-- favicon -->
		<!-- <link rel="icon" href="[[Insert favicon image source]]" type="image/x-icon"> -->
		
		<!-- style sheet -->
		<link rel="stylesheet" href="css/style.css">

		<!-- metadata -->
		<!-- <meta name="description" content="[[Insert description]]">

		<meta property="og:image" content="[[Insert meta image source]]">
		<meta property="og:image:secure_url" content="[[Insert meta image source]]">
		<meta property="og:image:type" content="image/jpeg">
		<meta property="og:image:width" content="1200">
		<meta property="og:image:height" content="630">
		<meta property="og:image:alt" content="[[Insert meta image description]]"> -->
		
	</head>

	<body>

		<header class="page-section site-header">

			<inner-column>
				
				<h1>Lesson 109.1 - PHP Array Basics and some "Loops"</h1>

			</inner-column>
		</header>
		
		<main class="page-section site-main">

			<section> 
			
				<inner-column>

					<h2>for() loop</h2>
					<p>Make a list of 20 things</p>

					<?php

					for ($counter = 0; $counter < 20; $counter++)
						echo "<li>$counter</li>";

					?>
				</inner-column>
			</section>

			<section>

				<inner-column>

					<h2>More Exercises</h2>

					<p>Name your 6 favorite bands and loop through them.</p>

					<?php 

					$favoriteArtists = [
						"OKGO",
						"Adele",
						"Postal Service",
						"Kylie Minogue",
						"Carly Rae Jepsen",
						"Lizzo",
					];

					foreach ($favoriteArtists as $artist) {
						echo "<li>$artist</li>";
					}
					?>

					<p>Tell your 8 favorite numbers and loop through them.</p>

					<?php 

					$favoriteNumbers = [20, 98, 88, 7, 3, 2.5, 9, 100];

					foreach ($favoriteNumbers as $number) {
						echo "<li>$number</li>";
					}
					?>

					<p>Use a for loop counting to 34 but only echo numbers if they aren't 12, 17, 23.</p>

					<?php

					for ($counter=1; $counter<35; $counter++) {
						if ($counter == 12) {}
							elseif ($counter == 17) {}
								elseif ($counter == 23) {}
							else {
								echo "<li>$counter</li>";
							}
					}
					?>

					<p>Only echo your favorite numbers if they are under 20.</p>

					<?php

					foreach ($favoriteNumbers as $number) {
						if ($number < 20) {
							echo "<li>$number</li>";	
						}
					}
					?>
				</inner-column>
			</section>
		</main>

<!-- 		<footer class="page-section site-footer">

			<div class="inner-column">
				
				<p>[[FOOTER!]]</p>
			</div>
		</footer> -->
	</body>
</html>