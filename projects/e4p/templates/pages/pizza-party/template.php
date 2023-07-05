<section class="pizza-party">
	<inner-column>
		
		<?php 
		//declare references
		$countPeople = 1;
		$countPizzas = 1;
		$slicesPerPizza = 8;

		if(isset($_POST["submitted"])) {
			// assign the input references
			$countPeople = $_POST["people"];
			$countPizzas = $_POST["pizzas"];
			$slicesPerPizza = $_POST["slices"];

			// calculations
			$totalSlices = $countPizzas * $slicesPerPizza;

			$slicesPerPerson = floor($totalSlices / $countPeople);

			$leftoverSlices = $totalSlices - $slicesPerPerson * $countPeople;
			
			// render output message
			if($countPeople == 1) {
				$personOrPeople = "person";
			} else {
				$personOrPeople = "people";
			}				

			if($slicesPerPerson == 1) {
				$pieceOrPieces1 = "piece";
			} else {
				$pieceOrPieces1 = "pieces";
			}

			if($countPizzas == 1) {
				$pizzaOrPizzas = "pizza";
			} else {
				$pizzaOrPizzas = "pizzas";
			}

			if($leftoverSlices == 1) {
				$isOrAre = "is";
				$pieceOrPieces2 = "piece";
			} else {
				$isOrAre = "are";
				$pieceOrPieces2 = "pieces";
			}

			if($slicesPerPerson == 1) {
				$pieceOrPieces = "piece";
			} else {
			$pieceOrPieces = "pieces";
			}

			$outputMessage = "
				<div class='output-message'>
					<p>We have $countPeople $personOrPeople with $countPizzas $pizzaOrPizzas.</p>
					<p>Each person gets $slicesPerPerson $pieceOrPieces1 of pizza.</p>
					<p>There $isOrAre $leftoverSlices leftover $pieceOrPieces2.</p>
				</div>";
		} ?>

		<h2 class="attention-voice">Pizza Party Calculator</h2>

		<form method='POST'>
			
			<p>Let's see how many pieces each person can get if we split evenly. Sharing is caring!</p>	
			
			<form-field>
				<label for="people">How many people in the party?</label>

				<input
					type="number"
					name="people"
					id="people"
					value="<?=$countPeople?>"
					step="1"
					min="1"
					required/>	
			</form-field>

			<form-field-group>
				<form-field>
					<label for="pizzas">How many pizzas do you have?</label>
				
					<input
						type="number"
						name="pizzas"
						id="pizzas"
						value="<?=$countPizzas?>"
						step="1"
						min="1"
						required/>	
				</form-field>
				
				<form-field>
					<label for="slices">How many slices per pizza?</label>
				
					<input
						type="number"
						name="slices"
						id="slices"
						value="<?=$slicesPerPizza?>"
						step="1"
						min="1"
						required/>
				</form-field>
			</form-field-group>
			
			<button type="submit" name="submitted">Pizza Time!</button>
		</form>

		<output>
			<?php if(isset($_POST["submitted"])) { ?>
				<?=$outputMessage?>
			<?php } ?>
		</output>

		<script src='templates/pages/<?=$page?>/script.js'></script>
	</inner-column>
</section>