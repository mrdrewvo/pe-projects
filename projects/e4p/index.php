<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section>

	<inner-column>

		<?php

		$forms = [
			[
				"formNum" => "8",
				"formName" => "Pizza Party",
				"formSrc" => "pizza-party.php"
			],
			[
				"formNum" => "9",
				"formName" => "Paint Calculator",
				"formSrc" => "paint-calculator.php"
			],
			[
				"formNum" => "10",
				"formName" => "Self-Checkout",
				"formSrc" => "self-checkout.php"
			],
			[
				"formNum" => "15",
				"formName" => "Password Validation",
				"formSrc" => "password-validation.php"
			],
			[
				"formNum" => "16",
				"formName" => "Legal Driving Age",
				"formSrc" => "legal-driving-age.php"
			],
		];

		echo "<ul>";

		foreach ($forms as $form) {

			$formNum = $form["formNum"];
			$formName = $form["formName"];
			$formSrc = $form["formSrc"];

			echo "
				<li>
					<a href='$formSrc'>$formNum $formName</a>
				<li>";
		}

		echo "</ul>"
		?>
	</inner-column>
</section>

<?php include("footer.php"); ?>

