<!-- <!DOCTYPE html> -->

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Lesson 109 - Monster Adoption Looping Exercise</title>
		
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

		<header>
			
			 <inner-column>
				
				<h1>Lesson 109 - foreach loops</h1>
			</inner-column>
		</header>
		

		<section class="review">

			<inner-column>
			
				<h2>Review</h2>

				<?php

					echo "helllo";

					$myArray = ["one", true, "cat", 3.0];

					$monsterProfile = [
						"id" => 2593,
						"name" => "Jeremy Beremy",
						"favoriteFood" => "baked apples",
						"age" => 5,
						"adopted" => false,
					];
				?>

				<p>I have <?=$myArray[0] . " " . $myArray[2]?> at my house.</p>

				<p class="<?=$monsterProfile["id"]?>">This monster's name is <?=$monsterProfile["name"]?>. They are <?=$monsterProfile["age"]?> years old and their favorite food is <?=$monsterProfile["favoriteFood"]?>. Their ID# is <?=$monsterProfile["id"]?>.</p>
			</inner-column>
		</section>

		<section class="foreach-exercise">
			
			<inner-column>

				<h2>Foreach Loops</h2>

				<h3>Fruits Example</h3>
				
				<?php
				
					$fruitsArray = ["apple", "banana", "carrot", "daikon", "eggplant"];

					echo "<ol>";

					foreach ($fruitsArray as $fruit) {
						echo "<li>" . $fruit . "</li>";
					};	
					
					echo "</ol>";

					echo "DONE";

				?>

				<h3>Cake Flavors</h3>

				<?php

					$cakeFlavors = ["brown butter vanilla", "chocolate", "chai", "red velvet"];
				?>

				<p>Our 2023 standard cake flavors are:</p>

				<ol>

				<?php

					foreach ($cakeFlavors as $cakeFlavor) {
						echo "<li>" . $cakeFlavor . "</li>";
					};
				?>

				</ol>

			</inner-column>
		</section>
	</body>
</html>



















