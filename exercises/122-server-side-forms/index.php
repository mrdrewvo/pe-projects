<?php include('head.php'); ?>

<?php include('header.php'); ?>
		
<main class="page-section site-main">

	<section class="lesson-notes">
	
		<inner-column>

			<h2>Lesson Notes</h2>

			<form>
				
				<p>input type='text'</p>
				<input type='text' placeholder="name" />
				<!--self-closing tag, can have different types (e.g. text (default), number) -->

				<p>input type='number' with a label</p>
				<label>Age</label>
				<input type='number'/>
				<!-- has some built-in validation -->

				<p>input type='email'</p>
				<input type='email'/>

				<p>input type='password'</p>
				<input type='password'/>

				<p>input type='range'</p>
				<input type="range">

				<p>Button type=''</p>
				<button>button</Button>

				<p>input type='submit'</p>
				<input type="submit">

				<p>button type='submit'</p>
				<button type='submit'>Submit</button>
			</form>



		</inner-column>
	</section>

	<section class="early-php-exploration">

		<inner-column>

			<h2>Ivy's Very Berry Party</h2>

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

			echo "<p>Boxes each come with $berriesPerBox so we'll need to buy $boxCount boxes. Each box is \${$pricePerBox} so the total budget needs to cover \${$totalPrice}.</p>";
			?>

		</inner-column>
	</section>

</main>

<?php include('footer.php'); ?>