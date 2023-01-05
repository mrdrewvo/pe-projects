<!-- <!DOCTYPE html> -->

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>P.E. presents Monday Star Adoptions</title>
		
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
				
				<head-banner>
					
					<h1>MonStar Adoptions</h1>

					<picture>
						<svg width="100%" height="100%" viewBox="0 0 542 564" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
						    <g transform="matrix(1,0,0,1,-1225.96,197.253)">
						        <g transform="matrix(3.99472,0,0,1.05888,-3329.14,11)">
						            <g transform="matrix(0.444777,-0.485645,0.12873,1.67796,487.918,501.364)">
						                <path d="M1575.54,40L1611.53,150.767L1728,150.767L1633.78,219.224L1669.77,329.991L1575.54,261.533L1481.32,329.991L1517.31,219.224L1423.09,150.767L1539.55,150.767L1575.54,40Z" style="fill:rgb(255,254,43);fill-opacity:0.5;"/>
						            </g>
						        </g>
						    </g>
						</svg>
					</picture>
				</banner>
				
				<p>Where every monster is a star. Adopt one today!</p>
				
			</inner-column>
		</header>

		<main>
		
			<section class="adoptee-list">
				
				<inner-column>

					<?php

					$codey = [
						"id" => 0001,
						"name" => "Codey",
						"age" => 5,
						"preferredPronouns" => "he/him",
						"favoriteFood" => "spaghetti and meatballs",
						"favoriteHobby" => "making websites",
						"adopted" => true,
						"pictureURL" => "images/codey.jpg",
						"pictureAltText" => "an adorable happy red monster with a pink nose and a tuft of pink hair, excited to be adopted",
					];

					$fragoo = [
						"id" => 0002,
						"name" => "Fragoo",
						"age" => 6,
						"favoriteFood" => "scrambled eggs",
						"favoriteHobby" => "hiking",
						"adopted" => false,
						"pictureURL" => "images/fragoo.jpg",
						"pictureAltText" => "a innocent pink little monster looking curiously to the left for a loving home",
					];

					$limabean = [
						"id" => 0003,
						"name" => "Limabean",
						"age" => 4,
						"favoriteFood" => "lentils",
						"favoriteHobby" => "gardening",
						"adopted" => false,
						"pictureURL" => "images/limabean.jpg",
						"pictureAltText" => "a spunky little green monster with a tuft of dark blue hair looking like he's ready to tell a funny joke to his new family",
					];

					$missReadsALot = [
						"id" => 0004,
						"name" => "Miss Reads-A-Lot",
						"age" => 9,
						"favoriteFood" => "grilled salmon",
						"favoriteHobby" => "writing short stories",
						"adopted" => true,
						"pictureURL" => "images/miss-reads-a-lot.jpg",
						"pictureAltText" => "an intellectual blue monster with gorgeous purple eye shadow reading a book about awesome places to see with her new family",
					];

					$mrBanana = [
						"id" => 0005,
						"name" => "Mr. Banana",
						"age" => 2,
						"favoriteFood" => "baked apples",
						"favoriteHobby" => "rock climbing",
						"adopted" => true,
						"pictureURL" => "images/mr-banana.jpg",
						"pictureAltText" => "a wacky yellow and tall monster with wide eyes full of curiousity and excitement to take on the world with his new family",
					];

					$orangina = [
						"id" => 0006,
						"name" => "Orangina",
						"age" => 4,
						"favoriteFood" => "tangerines",
						"favoriteHobby" => "crochet",
						"adopted" => false,
						"pictureURL" => "images/orangina.jpg",
						"pictureAltText" => "a happy orange monster that loves to joke around and find the good times at their new home",
					];

					$shadow = [
						"id" => 0007,
						"name" => "Shadow",
						"age" => 7,
						"favoriteFood" => "Canadian bacon",
						"favoriteHobby" => "chalk art",
						"adopted" => true,
						"pictureURL" => "images/shadow.jpg",
						"pictureAltText" => "a curious purple monster with a shy demeanor but a lot of love for a future home",
					];

					$monstersArray = [
						$codey, $fragoo, $limabean, $missReadsALot, $mrBanana, $orangina, $shadow,
					];

					?>

					<ul class="adoptee-list-mod">

					<?php

					foreach ($monstersArray as $monster) {
				
						echo "<li class='monster-profile' id='". $monster["id"] . "'>
							
							<monster-picture>
								
								<picture>
									<img src='" . $monster["pictureURL"] . "' alt='" . $monster["pictureAltText"] ."'>
									</picture>
								</monster-picture>

							<monster-profile-text>";

						if ($monster["adopted"] == true) {

							echo "<a class='adopted-false-button' href='#'>Adopt Me Today!</a>";
						} else {
							echo "<p class='adopted-true-text'>I'm adopted!</p>";
						}

						echo "<p class='hi'>Hi! My name is</p>

								<h2>" . $monster["name"] . "</h2>

								<p class='age'>Age: " . $monster["age"] . "</p>

								<p class='food'>Favorite Food: " . $monster["favoriteFood"] . "</p>

								<p class='hobby'>Favorite Hobby: " . $monster["favoriteHobby"] . "
							</monster-profile-text>
						</li>";
					};

					?>
					<a href=""></a>
				
					</ul>	
				</inner-column>
			</section>
		</main>
	</body>
</html>



















