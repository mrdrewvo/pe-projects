<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>101-arrays</title>
		
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
				
				<h1>Lesson 101 - Arrays</h1>

			</inner-column>
		</header>
		
		<main class="page-section site-main">

			<section class="bottle"> 
			
				<inner-column>

					<?php

						$item = [
							"item_name" => "Swell Bottle",
							"sku" => "123ABC",
							"brand" => "Swell",
							"height" => 12, //in inches
							"width" => 2.5, //in inches
							"material" => [
								"material_1" => "oak",
								"material_2" => "aluminum",
							],
							"capacity" => 0.75, //in liters
							"style" => "industrial",
							"weight" => 0.5, //empty, in lbs

							"quantity" => 10,
						];

						if ($item["quantity"] > 0) {
							$purchase_status = "available";
						} else {
							$purchase_status = "out of stock";
						};

					?>

					<h2>Item Summary for "<?=$item["item_name"]?>"</h2>

					<p>The <?=$item["item_name"]?> is <?=$purchase_status?> with <?=$item["quantity"]?> in stock.</p>

					<section class="ad_description">
						
						<p>The lovely <?=$item["item_name"]?> is the the first of it's kind. Made of <?=$item["material"]["material_1"]?> and <?=$item["material"]["material_2"]?>, it's our first with an <?=$item["style"]?> style.</p>
					</section>

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