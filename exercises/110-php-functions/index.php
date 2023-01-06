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

					<ul class="adoptee-list-mod">
						
					<?php

					//monster generator function
					function monsterGenerator($id, $name, $age, $preferredPronouns, $favoriteFood, $favoriteHobby, $adopted, $pictureURL, $pictureAtlText) {
						$monster = [
							"id" => $id,
							"name" => $name,
							"age" => $age,
							"preferredPronouns" => $preferredPronouns,
							"favoriteFood" => $favoriteFood,
							"favoriteHobby" => $favoriteHobby,
							"adopted" => $adopted,
							"pictureURL" => $pictureURL,
							"pictureAltText" => $pictureAtlText,
						];

						return $monster;
					}

					//monster list
					$codey = monsterGenerator(0001, "Codey", 5, "he/him", "spaghetti and meatballs", "making websites", true, "images/codey.jpg", "an adorable happy red monster with a pink nose and a tuft of pink hair, excited to be adopted",);
					$fragoo = monsterGenerator(0002,"Fragoo",6,"he/him","scrambled eggs","hiking",false,"images/fragoo.jpg","a innocent pink little monster looking curiously to the left for a loving home",);

					$limabean = monsterGenerator(0003, "Limabean", 4, "they/them", "lentils", "gardening", false, "images/limabean.jpg", "a spunky little green monster with a tuft of dark blue hair looking like he's ready to tell a funny joke to his new family",);

					$missReadsALot = monsterGenerator(0004, "Miss Reads-A-Lot", 9, "she/her", "grilled salmon", "writing short stories", true, "images/miss-reads-a-lot.jpg", "an intellectual blue monster with gorgeous purple eye shadow reading a book about awesome places to see with her new family",);

					$mrBanana = monsterGenerator(0005, "Mr. Banana", 2, "he/him", "baked apples", "rock climbing", true, "images/mr-banana.jpg", "a wacky yellow and tall monster with wide eyes full of curiousity and excitement to take on the world with his new family",);

					$orangina = monsterGenerator(0006, "Orangina", 4, "she/her", "tangerines", "crochet", false, "images/orangina.jpg", "a happy orange monster that loves to joke around and find the good times at their new home",);

					$shadow = monsterGenerator(0007, "Shadow", 7, "they/them", "Canadian bacon", "chalk art", true, "images/shadow.jpg", "a curious purple monster with a shy demeanor but a lot of love for a future home",);

					//final monster array
					$monstersArray = [
						$codey, $fragoo, $limabean, $missReadsALot, $mrBanana, $orangina, $shadow,
					];

					?>					

					<?php

						foreach ($monstersArray as $monster) {

						//adoption status
						if ($monster["adopted"] == true) {

							$adoptionStatus = "<a class='adopted-false-button' href='#'>Adopt Me Today!</a>";
						} else {
							$adoptionStatus = "<p class='adopted-true-text'>I'm adopted!</p>";
						}							
					?>
				
					<li class='monster-profile' id='<?=$monster["id"]?>'>
					
						<monster-picture>
								
							<picture>
								
								<img src='<?=$monster["pictureURL"]?>' alt='<?=$monster["pictureAltText"]?>'>
							</picture>
						</monster-picture>

						<monster-profile-text>

							<adoption-status>

								<?=$adoptionStatus?>

							</adoption-status>

							<p class='hi'>Hi! My name is</p>

							<h2><?=$monster["name"]?></h2>

							<basic-info>

								<p class='age'>Age: <?=$monster["age"]?></p>

								<p class='preferredPronouns'>Pronouns: <?=$monster["preferredPronouns"]?></p>

							</basic-info>
							

							<p class='food'>Favorite Food: <?=$monster["favoriteFood"]?></p>

							<p class='hobby'>Favorite Hobby: <?=$monster["favoriteHobby"]?></p>
						</monster-profile-text>
					</li>
					<?php

						};
					?>
					</ul>	
				</inner-column>
			</section>
		</main>
	</body>
</html>



















