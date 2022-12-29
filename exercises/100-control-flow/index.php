<!DOCTYPE html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>100-control-flow</title>
		
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
				
				<h1>Lesson 100 - PHP Control Flow</h1>

			</inner-column>
		</header>
		
		<main class="page-section site-main">

			<section class="price-alert"> 
			
				<inner-column>
				
					<h2>Price Alert</h2>

					<?php

						$starting_price = 50; //in USD
						$alert_type = "Notification"; //either "Notification" or "Buy"
						$price_difference_type = "Dollar"; //either "Dollar" or "Percentage"
						$target_difference = 10; //in USD
						$target_percentage = 50; //in whole number
						$current_price = 40; //ideally from scraper
						
						echo "<p>Starting Price: $" . $starting_price . "</p>";

						if ($price_difference_type == "Dollar") {
							
							$calc_target_price = $starting_price - $target_difference;

						} elseif ($price_difference_type == "Percentage") {
							$calc_target_price = $starting_price * $target_percentage / 100;
						}

						echo "<p>Target Price: $" . $calc_target_price . "</p>";

						echo "<p>Current Price: $" . $current_price . "</p>";

						if ($current_price <= $calc_target_price) {
							if ($alert_type == "Notification") {
								echo "<p>Price alert! Your item is now at or below your preferred price.</p>";
							} elseif ($alert_type == "Buy") {
								echo "<p>Your item has been auto-purchased!</p>";
							}
						} else {
							echo "<p>Your item is still too epensive!</p>";
						}

					?>

				</inner-column>
			</section>

			<section class="inventory-levels">
				
				<inner-column>
					
					<h2>Inventory Level Check</h2>

					<?php

						$current_quantity = 200;
						$sales_rate = 10; //per day
						$procurement_time = 14; //total days to order and receive next shipment
						$est_days_to_depletion = $current_quantity / $sales_rate; //how many days left till no inventory
						$order_window = $est_days_to_depletion - $procurement_time; //how many days till final order date

						if ($est_days_to_depletion <= $procurement_time) {
							$order_signal = "YES";
						} else {
							$order_signal = "NO";
						}

					?>

					<p>We currently have <?=$current_quantity?> iPhones in stock.</p>
					<p>Should we order the next shipment of iPhones? <?=$order_signal?></p>
					<p>We have <?=$order_window?> days till we should send in the order.</p>

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