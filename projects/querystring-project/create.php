<?php

$nameError = null;

	if ( isset($_POST["add"]) ) {

		if ( !empty($_POST["name"]) ) {
			$hasName = true;
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
				cols="30"
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
			<label for="outer frosting">Outer Frosting</label>
			<input
				type="text"
				id="outer frosting"
				name="outer frosting"/>
		</form-field>

		<form-field>
			<label for="decorations">Decorations</label>
			<input
				type="text"
				id="decorations"
				name="decorations"/>
		</form-field>
	</composition>	


	<button type="submit" name="add">Add Cake</button>
</form>