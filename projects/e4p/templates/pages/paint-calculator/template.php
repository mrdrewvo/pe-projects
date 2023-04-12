<!--
Goal: Calculate gallons of paint needed to paint the ceiling of a room.

Prompts/Inputs:
	ceilingLength (units?)
	ceilingWidth (units?)
	gallonCoverage (default: 1 gallon of paint covers 350 square feet)

Calculations:
	ceilingArea (length * width)

Output: 
	paintGallons (number of gallons needed to paint the ceiling as a whole number, rounded up)
	outputMessage - "You will need to purchase 2 gallons of paint to cover 360 square feet."

Constraints:
	* Use a constant to hold the conversion rate.
	* Ensure that you round up to the next whole number.

Challenges:
	* Revise the program to ensure that inputs are entered as numeric values. Don’t allow the user to proceed if the value entered is not numeric.
	* Implement support for a round room.
	* Implement support for an L-shaped room.
	* Implement a mobile version of this app so it can be used at the hardware store. 
-->

<section class="gradient paint-calculator">
	<inner-column>

		<?php 
		// declare references
		$ceilingLength = 1;
		$ceilingWidth = 1;
		$gallonCoverage = 350;

		if(isset($_POST["submitted"])) {
			// assign the input references
			$ceilingLength = $_POST["length"];
			$ceilingWidth = $_POST["width"];
			$gallonCoverage = $_POST["gallonCoverage"];

			// calculations
			$ceilingArea = $ceilingLength * $ceilingWidth;

			$paintGallons = ceil($ceilingArea / $gallonCoverage);

			// render output message
			if($paintGallons == 1) {

				$galorgals = "gallon";
			} else {
				$galorgals = "gallons";
			}

			$outputMessage = "<div class='output-message'><p>You will need to purchase <span>$paintGallons $galorgals of paint</span></p><p>to cover <span>$ceilingArea square feet.</span></p></div>";
		} ?>

		<h2>Paint Calculator</h2>

		<p>How many gallons of paint do we need to cover our ceiling?</p>

		<form method='POST'>
			
			<p>Please enter your ceiling dimensions below.</p>
			
			<form-field>
				<label for="length">Length (in feet)</label>

				<input
					type="number"
					name="length"
					id="length"
					value="<?=$ceilingLength?>"
					step="any"
					min="1"/>	
			</form-field>
			
			<form-field>
				<label for="width">Width (in feet)</label>

				<input
					type="number"
					name="width"
					id="width"
					value="<?=$ceilingWidth?>"
					step="any"
					min="1"/>	
			</form-field>

			<form-field>
				<label for="gallonCoverage">Coverage Area per Paint Gallon (in sq feet)</label>
				
				<input
					type="number"
					name="gallonCoverage"
					id="gallonCoverage"
					value="<?=$gallonCoverage?>"
					step="any"
					min="0"/>	
			</form-field>
			
			<button type="submit" name="submitted">Let's find out!</button>
		</form>

		<output>
			<?php if(isset($_POST["submitted"])) { ?>
				<?=$outputMessage?>
			<?php } ?>
		</output>

		<script src='script.js'></script>
	</inner-column>
</section>
