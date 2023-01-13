<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section class="selfcheckout">

	<inner-column>

<!-- Goal: Create a simple self-checkout system. Prompt for the prices and quantities of three items. Calculate the subtotal of the items. Then calculate the tax using a tax rate of 5.5%. Print out the line items with the quantity and total, and then print out the subtotal, tax amount, and total.


Inputs:
$itemPrice (x3)
$itemQuantity (x3)

Assumptions:
3 items total
$taxRate = .0055;

Process:
$subtotalPrice
$taxPrice
$totalPrice

Output: 
$msgPrice1
$msgQuantity1
$msgPrice2
$msgQuantity2
$msgPrice3
$msgQuantity3
$msgSubtotal
$msgTax
$msgTotal

Constraints
* Keep the input, processing, and output parts of your
program separate. Collect the input, then do the math operations and string building, and then print out the output.
* Be sure you explicitly convert input to numerical data
before doing any calculations.

Challenges
* Revise the program to ensure that prices and quantities
are entered as numeric values. Don’t allow the user to proceed if the value entered is not numeric.
* Alter the program so that an indeterminate number of
items can be entered. The tax and total are computed when there are no more items to be entered.

Pseudocode
1. x3
	Ask for price
	Ask for quantity
	Store these entries
	Ensure values are numbers with up to 2 decimal places, no negatives
2. Calculate subtotal by multiplying price and quantity of each item and adding each of these
3. Store subtotal
4. Calculate tax by multiplying subtotal by tax rate
5. Store tax price
6. Calculate final total by adding the subtotal and the tax price
7. Store the final total
8. x3
	Create string for the price
	Create string for the quantity
9. Store price + quantity strings
10. Create string for subtotal
11. Store subtotal string
12. Create string for tax
13. Store tax string
14. Create string for final total
15. Store final total string

-->

		<?php

		$quanity1 = 0;
		$price1 = 0;
		$quanity2 = 0;
		$price2 = 0;
		$quanity3 = 0;
		$price3 = 0;

		//provided tax rate
		$taxRate = .0055;

		$subtotalPrice = 0;
		$taxPrice = 0;
		$totalPrice = 0;

		$msgPrice1 = null;
		$msgQuantity1 = null;
		$msgPrice2 = null;
		$msgQuantity2 = null;
		$msgPrice3 = null;
		$msgQuantity3 = null;
		$msgSubtotal = null;
		$msgTax = null;
		$msgTotal = null;

		// if(isset($_POST["submitted"])) {

		// 	for($i=1; $i<=3; $i++) {

		// 		$var1 = "$itemQuantity" . "$i";

		// 		$var1 = $_POST["quantity$i"];
		// 		$itemPrice = $_POST["price$i"];
		// 	}
		// }
			
		if(isset($_POST["submitted"])) {

			//assign the input variables
			$quantity1 = floatval($_POST["quantity1"]);
			$price1 = floatval($_POST["price1"]);
			$quantity2 = floatval($_POST["quantity2"]);
			$price2 = floatval($_POST["price2"]);
			$quantity3 = floatval($_POST["quantity3"]);
			$price3 = floatval($_POST["price3"]);

			$prettyprice1 = number_format($price1,2);
			$prettyprice2 = number_format($price2,2);
			$prettyprice3 = number_format($price3,2);

			//calculate subtotal
			$subtotalPrice = $quantity1 * $price1 + $quantity2 * $price2 + $quantity3 * $price3;

			$prettySubtotalPrice = number_format($subtotalPrice,2);

			//calculate tax
			$taxPrice = $subtotalPrice * $taxRate;

			$prettyTaxPrice = number_format($taxPrice,2);

			//calculate total price
			$totalPrice = number_format($subtotalPrice + $taxPrice,2);

			if ($quantity1 > 1) {
				$isOrAre1 = "are";
			} else {
				$isOrAre1 = "is";
			}

			if ($quantity2 > 1) {
				$isOrAre2 = "are";
			} else {
				$isOrAre2 = "is";
			}

			if ($quantity3 > 1) {
				$isOrAre3 = "are";
			} else {
				$isOrAre3 = "is";
			}

			//create all output messages
			$msgItem1 = "<p>There $isOrAre1 $quantity1 of Item 1 priced at \${$prettyprice1} each.</p>";
			$msgItem2 = "<p>There $isOrAre2 $quantity2 of Item 2 priced at \${$prettyprice2} each.</p>";
			$msgItem3 = "<p>There $isOrAre3 $quantity3 of Item 3 priced at \${$prettyprice3} each.</p>";
			$msgSubtotal = "<p>The subtotal is \${$prettySubtotalPrice}.</p>";
			$msgTax = "<p>The total tax is \${$prettyTaxPrice}.</p>";
			$msgTotal = "<p>The final total is \${$totalPrice}.</p>";
		}
		?>

		<h2>Self-Checkout: An introvert's best friend</h2>

		<form method='POST'>
			
			<p>Please enter your item unit price and quantity below (up to 3 items).</p>
			
			<?php 
			
			for($i=1; $i<=3; $i++) {

				echo "<p>Item $i</p>";

				echo "<div class='form-field'>
				
				<label for='quantity$i'>Quantity</label>
				<input
					type='number'
					name='quantity$i'
					id='quantity$i'
					step='1'
					min='0'/>	
				</div>";

				echo "<div class='form-field'>
				
				<label for='price$i'>Price ($)</label>
				<input
					type='number'
					name='price$i'
					id='price$i'
					step='.01'
					min='0'/>	
				</div>";
			};

			?>
			
			<button type="submit" name="submitted">Submit</button>
		</form>

		<?php

		if(isset($_POST["submitted"])) {
		
			echo "
				<div class='output-message'>
					$msgItem1
					$msgItem2
					$msgItem3
					$msgSubtotal
					$msgTax
					$msgTotal
				</div>";
		}
		?>
	</inner-column>
</section>