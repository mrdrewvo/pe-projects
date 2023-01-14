<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section class="password-validation">

	<inner-column>

		<?php

		$inputUsername = null;
		$inputPassword = null;

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
		
		$loginMatch = null;
		$msgWelcome = "<p class='welcome'>Welcome</p>";
		$msgDenied = "<p class='denied'>I don't you. Stranger Danger!</p>";

		$msgOutput = null;
			
		if(isset($_POST["submitted"])) {

			//assign the input variables

			echo "<pre><code>";

			var_dump($_POST);

			echo "</pre></code>";

			$inputUsername = $_POST["username"];
			$inputPassword = $_POST["password"];
			
			//compare the username first - if failed, 
			
			foreach($realLogins as $login) {

				$loginCheck = strcasecmp($inputUsername, $login["username"]);
				echo $login["username"];

			};

			echo "<pre><code>";

			var_dump($loginCheck);

			echo "</pre></code>";

			// then compare associated password
			// if(strcmp($inputPassword, $realPassword) === 0) {

			//$loginMatch




			//assign message accordingly
			if($logMatch) {
				$msgOutput = $msgWelcome;
			} else {
				$msgOutput = $msgDenied;
			}
		}
		?>

		<h2>Password Validation</h2>

		<form method='POST'>
			
			<p>To those that need to feel validated today.</p>
			
			<div class='form-field'>
				
				<label for='username'>Username</label>
				<input
					type='text'
					name='username'
					id='username'/>	
			</div>

			<div class='form-field'>
				
				<label for='password'>Password</label>
				<input
					type='password'
					name='password'
					id='password'/>	
			</div>
			
			<button type="submit" name="submitted">Submit</button>
		</form>

		<?php

		if(isset($_POST["submitted"])) {
		
			echo $msgOutput;
				
		}
		?>
	</inner-column>
</section>