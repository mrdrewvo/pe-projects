<h1>Add a cake</h1>

<form method="POST">

	<form-field>
		<label for="name">Name</label>
		<input
			type="text"
			name="name"/>

	</form-field>

	<form-field>
		<label for="pictureURL">Image URL (images/[[name.jpg]])</label>
		<input
			type="text"
			name="pictureURL"/>
	</form-field>

	<form-field>
		<label for="date">Date (MMM YYYY)</label>
		<input
			type="text"
			name="date"/>
	</form-field>

	<form-field>
		<label for="story">Story Blurb</label>
		<input
			type="text"
			name="story"/>
	</form-field>

	<p>Composition</p>
	
	<form-field>
		<label for="sponge">Sponge</label>
		<input
			type="text"
			name="sponge"/>
	</form-field>

	<form-field>
		<label for="filling">Filling</label>
		<input
			type="text"
			name="filling"/>
	</form-field>

	<form-field>
		<label for="texture">Texture</label>
		<input
			type="text"
			name="texture"/>
	</form-field>

	<form-field>
		<label for="soak">Soak</label>
		<input
			type="text"
			name="soak"/>
	</form-field>

	<form-field>
		<label for="outer frosting">Outer Frosting</label>
		<input
			type="text"
			name="outer frosting"/>
	</form-field>

	<form-field>
		<label for="decorations">Decorations</label>
		<input
			type="text"
			name="decorations"/>
	</form-field>



	<button type="submit" name="add">Add Cake</button>
</form>