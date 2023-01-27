<form method="POST">
	
	<h2 class="attention-voice">Become a DoorDash Partner and increase your profit up to 60%</h2>

	<p>Fill out the form below to become a DoorDash Partner</p>

	<form-field>
		
		<input
			type="text"
			id="business-name"
			name="businss-name"
			placeholder="Business Name"
			required/>
	</form-field>
	
	<form-field>
		
		<input
			type="text"
			id="business-address"
			name="bussiness-address"
			placeholder="Business Address"
			required/>
	</form-field>

	<contact-info>
		
		<form-field>
		
			<input
				type="email"
				id="email-address"
				name="email-address"
				placeholder="Email Address"
				required/>
		</form-field>

		<form-field>
			
			<input
				type="tel"
				id="phone-number"
				name="phone-number"
				placeholder="Phone Number"
				pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
				required/>
		</form-field>
	</contact-info>

	<form-field>
		
		<select id="business-type" name="business-type" required/>

			<option value="" disabled selected>Select your business type</option>
			<option value="restaurant">Restaurant</option>
			<option value="grocery">Grocery</option>
			<option value="alcohol">Alcohol</option>
			<option value="convenience">Convenience</option>
			<option value="flower-shop">Flower Shop</option>
			<option value="pet-store">Pet Store</option>
			<option value="retail">Retail</option>
			<option value="order-food">I want to order food...</option>
			<option value="dasher">I want to become a Dasher</option>
		</select>
	</form-field>

	<button class="button" type="submit" name="submit">Get started</button>
</form>