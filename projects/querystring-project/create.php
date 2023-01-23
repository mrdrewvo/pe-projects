<?php
	
	$cakeData = file_get_contents("cakes.json");

	$hasName = false;
	$nameError = null;

	$formSubmitted = isset($_POST["add"]);

	if ($formSubmitted) {

		if ( !empty($_POST["name"]) ) {
			
			$hasName = true;

			//CREATE MONSTER

			$newCake = [
				"id" => 0,
				"name" => $_POST["name"],
				"pictureURL" => $_POST["pictureURL"],
				"date" => $_POST["date"],
				"story" => $_POST["story"],
				"composition" => [
					"Sponge" => $_POST["sponge"],
					"Filling" => $_POST["filling"],
					"Texture" => $_POST["texture"],
					"Soak"  => $_POST["soak"],
					"Outer Frosting" => $_POST["outerFrosting"],
					"Decorations" => $_POST["decorations"],
				],
			];

			echo "<pre>";
			var_dump($newCake);
			echo "</pre>";

			// Transform it to JSON file
			$cakeJson = json_encode($newCake);

			// SAVE MONSTER
			file_put_contents('cakes.json', $cakeJson);

		} else {
			$nameError = "Please add a name";
		}
	}

?>


<h1>Add a cake</h1>

<form method="POST">

	<basic-info>
	
		<h2>Basic Info</h2>
		<form-field>
			<label for="name">Name</label>
			<input
				type="text"
				id="name"
				name="name"/>
		</form-field>
		<?php if ($nameError) { ?>
			<p class="error"><?=$nameError?></p>
		<?php } ?>

		<form-field>
			<label for="pictureURL">Image URL (images/[[name.jpg]])</label>
			<input
				type="file"
				id="pictureURL"
				name="pictureURL"/>
		</form-field>

		<form-field>
			<label for="date">Date (MMM YYYY)</label>
			<input
				type="month"
				id="date"
				name="date"/>
		</form-field>

		<form-field>
			<label for="story">Story Blurb</label>
			<textarea
				id="story"
				name="story"
				rows="5"
				required
			></textarea>
		</form-field>
	</basic-info>

	<composition>
		<h2>Composition</h2>
		
		<form-field>
			<label for="sponge">Sponge</label>
			<input
				type="text"
				id="sponge"
				name="sponge"
				required/>
		</form-field>

		<form-field>
			<label for="filling">Filling</label>
			<input
				type="text"
				id="filling"
				name="filling"
				required/>
		</form-field>

		<form-field>
			<label for="texture">Texture</label>
			<input
				type="text"
				id="texture"
				name="texture"
				required/>
		</form-field>

		<form-field>
			<label for="soak">Soak</label>
			<input
				type="text"
				id="soak"
				name="soak"/>
		</form-field>

		<form-field>
			<label for="outerFrosting">Outer Frosting</label>
			<input
				type="text"
				id="outerFrosting"
				name="outerFrosting"/>
		</form-field>

		<form-field>
			<label for="decorations">Decorations</label>
			<input
				type="text"
				id="decorations"
				name="decorations"/>
		</form-field>
	</composition>	


	<button class="button" type="submit" name="add">Add Cake</button>
</form>