<?php include("head.php"); ?>

<?php include("header.php"); ?>

<!-- self-checkout (ch3, ex10)
password validation (ch4, ex15)
bac calculator (ch4, ex17) -->

<section>

	<inner-column>

		<?php

		$forms = [
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

