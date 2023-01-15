<?php include("head.php"); ?>

<?php include("header.php"); ?>
		
<main class="page-section site-main">

	<section class="pizza-party">
	
		<inner-column>

			<?php 

			$countPeople = 1;
			$countPizzas = 1;
			$slicesPerPizza = 8; //assumed
			?>

			<h2>Pizza Party Calculator</h2>

			<form method='POST'>
				
				<p>Let's see how many pieces each person can get if we split evenly. Sharing is caring!</p>	
				
				<div class="form-field">
					
					<label for="people">How many people in the party?</label>
					<input
						type="number"
						name="people"
						id="people"
						value="<?=$countPeople?>"
						step="1"
						min="1"/>	
				</div>
				
				<div class="form-field">
					
					<label for="pizzas">How many pizzas do you have?</label>
					<input
						type="number"
						name="pizzas"
						id="pizzas"
						value="<?=$countPizzas?>"
						step="1"
						min="1"/>	
				</div>
				
				<button type="submit" name="submitted">Pizza Time!</button>
			</form>

			<?php

			if(isset($_POST["submitted"])) {

				$countPeople = $_POST["people"];
				$countPizzas = $_POST["pizzas"];

				$totalSlices = $countPizzas * $slicesPerPizza;

				$slicesPerPerson = floor($totalSlices / $countPeople);

				$leftoverSlices = $totalSlices - $slicesPerPerson * $countPeople;
				
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

				echo "
					<p>We have $countPeople $personOrPeople with $countPizzas $pizzaOrPizzas.</p>
					<p>Each person gets $slicesPerPerson $pieceOrPieces1 of pizza.</p>
					<p>There $isOrAre $leftoverSlices leftover $pieceOrPieces2.</p>
				";
			}
			?>
		</inner-column>
	</section>
</main>

<?php include("footer.php"); ?>