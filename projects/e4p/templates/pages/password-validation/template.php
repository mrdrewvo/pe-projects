<section class="password-validation">
	<inner-column>

		<?php
		// declare references
		$inputUsername = null;
		$inputPassword = null;

		$loginMatch = null;
		$msgWelcome = "<p class='welcome'>Welcome</p>";
		$msgDenied = "<p class='denied'>I don't you. Stranger Danger!</p>";

		$outputMessage = null;

		// declare assumptions
		$realLogins = [
			[
				"username" => "alpha6",
				"password" => "Password123",
			],
			[
				"username" => "mysteryman",
				"password" => "Boo!123",	
			]
		];
			
		if(isset($_POST["submitted"])) {
			// assign the input variables
			$inputUsername = $_POST["username"];
			$inputPassword = $_POST["password"];
			
			// calculations
			// compare the username first - if failed...
			foreach($realLogins as $login) {
				$loginCheck = strcasecmp($inputUsername, $login["username"]);
				echo $login["username"];
			};

			// if username match, then compare associated password
			// if(strcmp($inputPassword, $realPassword) === 0) {
			//$loginMatch
			//assign message accordingly
			if($logMatch) {
				$outputMessage = $msgWelcome;
			} else {
				$outputMessage = $msgDenied;
			}
		} ?>

		<h2 class="attention-voice">Password Validation</h2>

		<form method='POST'>
			
			<p>For those that need to feel validated today.</p>
			
			<form-field>
				<label for='username'>Username</label>

				<input
					type='text'
					name='username'
					id='username'/>	
			</form-field>

			<form-field>
				<label for='password'>Password</label>
				
				<input
					type='password'
					name='password'
					id='password'/>	
			</form-field>
			
			<button type="submit" name="submitted">Submit</button>
		</form>

		<output>
			<?php if(isset($_POST["submitted"])) { ?>
				<div class="output-message">
					<?=$outputMessage?>
				</div>
			<?php } ?>
		</output>

		<script src='templates/pages/<?=$page?>/script.js'></script>
	</inner-column>
</section>