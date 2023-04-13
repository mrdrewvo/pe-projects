<!--
Goal: Create a simple self-checkout system. Prompt for the prices and quantities of three items. Calculate the subtotal of the items. Then calculate the tax using a tax rate of 5.5%. Print out the line items with the quantity and total, and then print out the subtotal, tax amount, and total.

Prompts/Inputs:
	price1
	quantity1
	price2
	quantity2
	price3
	quantity3

Assumptions:
	taxRate = 0.0055

Output:
	subTotal
	tax
	finalTotal
	finalMessage

Pseudocode:
	Prompt for price1 with "Enter the price of item 1:"
	Prompt for quantity1 with "Enter the quantity of item 1:"
	Prompt for price2 with "Enter the price of item 1:"
	Prompt for quantity2 with "Enter the quantity of item 1:"
	Prompt for price3 with "Enter the price of item 1:"
	Prompt for quantity3 with "Enter the quantity of item 1:"

	Convert all values to number format

	Calculate subTotal with "(price1 * quantity1) +
	(price2 * quantity2) + (price3 * quantity3)
	Calculate tax with subTotal * taxRate
	Calculate finalTotal with subTotal + tax

	Format subTotalPretty, taxPretty, and finalTotalPretty by adding $ and rounding to 2 decimal places

	Concatenate finalMessage with "Subtotal: subTotalPretty (line break) Tax: taxPretty (line break) Total: finalTotalPretty"

	Display finalMessage
-->

<section class="self-checkout">
	<inner-column>
		
		<?php
		// declare references
		$quanity1 = 0;
		$price1 = 0;
		$quanity2 = 0;
		$price2 = 0;
		$quanity3 = 0;
		$price3 = 0;

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
			// assign the input variables
			$quantity1 = floatval($_POST["quantity1"]);
			$price1 = floatval($_POST["price1"]);
			$quantity2 = floatval($_POST["quantity2"]);
			$price2 = floatval($_POST["price2"]);
			$quantity3 = floatval($_POST["quantity3"]);
			$price3 = floatval($_POST["price3"]);

			$prettyprice1 = "$". number_format($price1,2);
			$prettyprice2 = "$". number_format($price2,2);
			$prettyprice3 = "$". number_format($price3,2);

			// calculate subtotal
			$subtotalPrice = $quantity1 * $price1 + $quantity2 * $price2 + $quantity3 * $price3;

			$prettySubtotalPrice = "$". number_format($subtotalPrice,2);

			// calculate tax
			$taxPrice = $subtotalPrice * $taxRate;

			$prettyTaxPrice = "$". number_format($taxPrice,2);

			// calculate total price
			$totalPrice = "$". number_format($subtotalPrice + $taxPrice,2);

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

			// create all output messages
			$msgItem1 = "<p>There $isOrAre1 $quantity1 of Item 1 priced at $prettyprice1 each.</p>";
			$msgItem2 = "<p>There $isOrAre2 $quantity2 of Item 2 priced at $prettyprice2 each.</p>";
			$msgItem3 = "<p>There $isOrAre3 $quantity3 of Item 3 priced at $prettyprice3 each.</p>";
			$msgSubtotal = "<p>The subtotal is $prettySubtotalPrice.</p>";
			$msgTax = "<p>The total tax is $prettyTaxPrice.</p>";
			$msgTotal = "<p>The final total is $totalPrice.</p>";
		} ?>

		<h2 class="attention-voice">Self-Checkout: An introvert's best friend</h2>

		<form method='POST'>
			
			<p>Please enter your item unit price and quantity below (up to 3 items).</p>
			
			<?php for($i=1; $i<=3; $i++) { ?>

				<label>Item <?=$i?></label>

				<form-field-group>
					<form-field>
						<label for='quantity<?=$i?>'>Quantity</label>
						<input
							type='number'
							name='quantity<?=$i?>'
							id='quantity<?=$i?>'
							step='1'
							min='0'/>	
					</form-field>
					
					<form-field>
						<label for='price<?=$i?>'>Price ($)</label>
						<input
							type='number'
							name='price<?=$i?>'
							id='price<?=$i?>'
							step='.01'
							min='0'/>	
					</form-field>
				</form-field-group>
			<?php } ?>
			
			<button type="submit" name="submitted">Submit</button>
		</form>

		<output>
			<?php if(isset($_POST["submitted"])) { ?>
				<div class="output-message">
					<?=$msgItem1?>
					<?=$msgItem2?>
					<?=$msgItem3?>
					<?=$msgSubtotal?>
					<?=$msgTax?>
					<?=$msgTotal?>
				</div>
			<?php } ?>
		</output>

		<script src='templates/pages/<?=$page?>/script.js'></script>
	</inner-column>
</section>