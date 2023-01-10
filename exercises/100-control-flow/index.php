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
						$procurement_time = 14; //time between order submission and receiving the next shipment
						$days_to_depeletion = $current_quantity / $sales_rate; //time before inventory is depleted
						$days_till_order_signal = $days_to_depeletion - $procurement_time;

						if ($days_to_depeletion > $procurement_time) {
							$order_signal = "No";
						} else {
							$order_signal = "Yes";
						}
					?>

					<p>We currently have <?=$current_quantity?> iPhones in stock.</p>
					<p>Should we submit the next order of iPhones?: <?=$order_signal?></p>
					<p>Submit order at least <?=$days_till_order_signal?> from now.</p>

				</inner-column>
			</section>

			<section class="early-php-exploration">
				
				<inner-column>

					<h2>Early PHP Exploration - Ivy's Very Berry Party</h2>

					<?php

					$guestCount = 4;
					$totalPeople = $guestCount + 1; // including our host, Ivy
					$berriesPerPerson = 15;

					$totalBerries = $totalPeople * $berriesPerPerson;

					$message = "<p>We'll need $berriesPerPerson per guest. There will be $guestCount guests, but don't forget Ivy! So that means we need to buy $totalBerries berries in total for the event.</p>";

					echo $message;

					/* Extra Challenge (make sure to round):

						Now add these - 
						- 26 berries per box
						- How many boxes will you need?
						- What is the price per box?
						- What is the price total?
						
					TDD:

					Given the number of berries per box and the price per box, what is the total price to buy enough boxes of berries?

					Inputs:
					- $berriesPerBox: 10
					- $pricePerBox: 7 (in USD)

					Expected Results:
					- $boxCount: 8 (7.5 but needs to round up)
					- $totalPrice: $56 (need to print the '$')
					
					Pseudocode:
					
					Initalize $berriesPerBox as coded (OOS: validate for positive whole number)
					Intitiailze $pricePerBox (in USD) as coded (OOS: round to .00)
					
					$boxCount = round(($totalBerries / $berriesPerBox), 0);
					$totalPrice = $pricePerBox * $boxCount;

					Display "Boxes each come with $berriesPerBox so we'll need to buy $boxCount boxes. Each box is $($pricePerBox) so the total budget needs to cover $totalPrice."

					*/

					$berriesPerBox = 26;
					$pricePerBox = 7; // in USD

					$boxCount = round(($totalBerries / $berriesPerBox), 0);
					$totalPrice = $pricePerBox * $boxCount;

					echo "<p>Boxes each come with $berriesPerBox so we'll need to buy $boxCount boxes. Each box is {$pricePerBox} so the total budget needs to cover {$totalPrice}.</p>";
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














