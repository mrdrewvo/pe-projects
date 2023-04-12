<!--
Goal: Calculate the user's BAC and determine if they are safe to drive.

Prompts/Inputs:
	$weight (in lbs)
	$sex
	$countDrinks
	$alcoholPerDrink (in oz)
	$timeSinceDrink (in hours)

Assumptions:
	$alcDistRatioMale = .73;
	$alcDistRatioFemale = .66;
	$bacLimit = 0.08; (not legal to drive >=$bacLimit)

Calculations:
	if $sex = M/F (dropdown?) {
		$alcRatio = 
	} else 

	$alcoholConsumed = $countDrinks * $alcoholPerDrink;

	$BAC = $alcoholConsumed * 5.14 / $weight * $alcRatio * $timeSinceDrink;

	if ($BAC >= $bacLimit) {
		$legalOrNot 
	}
	
Output:
	"Your BAC is $BAC."
	"It [is][is not] legal for you to drive. Be safe!"
 -->

<section class="blood-alcohol-calculator">
	<inner-column>

		<?php
		// declare refereces
		$weight = 1;// in lbs
		$sex = [0, 0];
		$countDrinks = 0;	
		$alcoholPerDrink = 0;  // in oz
		$timeSinceDrink = 0;// in hours

		//hardcoded data
		$alcDistRatioMale = .73;
		$alcDistRatioFemale = .66;
		$bacLimit = 0.08; // not legal to drive >=$bacLimit
		
		if(isset($_POST["submitted"])) {
			// assign the input variables
			$weight = $_POST["weight"];
			$sex = $_POST["sex"];
			$countDrinks = $_POST["countDrinks"];	
			$alcoholPerDrink = $_POST["alcoholPerDrink"];
			$timeSinceDrink = $_POST["timeSinceDrink"];
			
			// calculations
			$alcoholConsumed = $countDrinks * $alcoholPerDrink;

			if ($sex = "M") {
				$alcRatio = $alcDistRatioMale;
			} else {
				$alcRatio = $alcDistRatioFemale;
			}

			$BAC = round(($alcoholConsumed * 5.14 / $weight * $alcRatio) - .015 * $timeSinceDrink,3);
		} ?>

		<!-- form -->
		<h2>Legal Driving Age</h2>

		<form method='POST'>
			
			<p>Be safe! Let's check your blood alcohol content (BAC) level to see if it's okay for you to drive.</p>

			<p class="reminder">Reminder: The BAC limit is <?=$bacLimit?>.</p>
			
			<form-field>
				<label for='weight'>How much do you weigh? (in lbs)</label>

				<input
					type='number'
					name='weight'
					id='weight'
					value='<?=$weight?>'
					step='0.1'
					min = '1'/>	
			</form-field>

			<form-field>				
				<p>Sex (M/F)</p>

				<form-option>
					<input
						type='radio'
						name='sex'
						id='M'
						value='M'
						required/>
					
					<label for='M'>M</label>
				</form-option>	

				<form-option>
					<input
						type='radio'
						name='sex'
						id='F'
						value='F'
						required/>
					
					<label for='F'>F</label>
				</form-option>	
			</form-field>

			<form-field>
				<label for='countDrinks'>How many drinks have you had?</label>

				<input
					type='number'
					name='countDrinks'
					id='countDrinks'
					value='<?=$countDrinks?>'
					step='0.1'
					min = '0'/>	
			</form-field>

			<form-field>
				<label for='alcoholPerDrink'>About how many oz of alcohol was in each drink?</label>

				<input
					type='number'
					name='alcoholPerDrink'
					id='alcoholPerDrink'
					value='<?=$alcoholPerDrink?>'
					step='0.1'
					min = '0'/>	
			</form-field>

			<form-field>
				<label for='timeSinceDrink'>How many hours ago was your last drink?</label>
				
				<input
					type='number'
					name='timeSinceDrink'
					id='timeSinceDrink'
					value='<?=$timeSinceDrink?>'
					step='0.01'
					min = '0'/>	
			</form-field>
			
			<button type="submit" name="submitted">Submit</button>
		</form>

		<output>
			<?php
				if(isset($_POST["submitted"])) {
				
					echo "<p>Your BAC is $BAC.</p>";
				
					echo "<p>";
					if ($BAC >= $bacLimit) {
						echo "It is not legal for you to drive. Sober up!";
					} else {
						echo "Good to go! But still make sure to drive safe.";
					}
					echo "</p>";
				}
			?>
		</output>

		<script src='script.js'></script>
	</inner-column>
</section>