<?php include("head.php"); ?>

<?php include("header.php"); ?>
		
<main class="page-section site-main">

	<section class="gradient">
	
		<inner-column>

<!-- Goal: Calculate gallons of paint needed to paint the ceiling of a room.

Inputs:
ceilingLength (units?)
ceilingWidth (units?)

Assumptions:
gallonCoverage (1 gallon of paint covers 350 square feet)

Process:
ceilingArea (length * width)

Output: 
paintGallons (number of gallons needed to paint the ceiling as a whole number, rounded up)
outputMessage - "You will need to purchase 2 gallons of paint to cover 360 square feet."

Constraints
* Use a constant to hold the conversion rate.
* Ensure that you round up to the next whole number.

Challenges
* Revise the program to ensure that inputs are entered as
numeric values. Don’t allow the user to proceed if the value entered is not numeric.
* Implement support for a round room.
* Implement support for an L-shaped room.
* Implement a mobile version of this app so it can be used at the hardware store. 

-->

			<?php 

			$ceilingLength = 0;
			$ceilingWidth = 0;
			$gallonCoverage = 350;

			if(isset($_POST["submitted"])) {

				$ceilingLength = $_POST["length"];
				$ceilingWidth = $_POST["width"];

			$ceilingArea = $ceilingLength * $ceilingWidth;

			$paintGallons = ceil($ceilingArea / $gallonCoverage);

			if($paintGallons == 1) {

				$galorgals = "gallon";
			} else {
				$galorgals = "gallons";
			}

			$outputMessage = "<div class='output-message'><p>You will need to purchase <span>$paintGallons $galorgals of paint</span></p><p>to cover <span>$ceilingArea square feet.</span></p></div>";
			}
			?>

			<h2>How many gallons of paint do we need to cover our ceiling?</h2>

			<p class="reminder">Reminder: 1 gallon of paint covers <?=$gallonCoverage?> square feet.</p>

			<form method='POST'>
				
				<p>Please enter your ceiling dimensions below.</p>
				
				<div class="form-field">
					
					<label>Length (in feet)</label>
					<input
						type="number"
						name="length"
						value="<?=$ceilingLength?>"
						step="any"
						min="0"/>	
				</div>
				
				<div class="form-field">
					
					<label>Width (in feet)</label>
					<input
						type="number"
						name="width"
						value="<?=$ceilingWidth?>"
						step="any"
						min="0"/>	
				</div>
				
				<button type="submit" name="submitted">Let's find out!</button>
			</form>

			<?php

			if(isset($_POST["submitted"])) {
			
				echo $outputMessage;
			}
			?>
		</inner-column>
	</section>
</main>

<?php include("footer.php"); ?>