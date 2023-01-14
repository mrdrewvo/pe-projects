<?php include("head.php"); ?>

<?php include("header.php"); ?>

<section class="password-validation">

<!--
	Goal
	Create a simple program that validates user login credentials. The program must prompt the user for a username and password. The program should compare the password given by the user to a known password. If the password matches, the program should display "Welcome!" If it doesn't match, the program should display "I don't know you."

	Constraints
	* Use an if/else statement for this problem
	* Make sure the program is case sensitive

	Inputs
	$username (maybe)
	$password

	Assumptions
	$realUsername (maybe)
	$realPassword
	$msgWelcome
	$msgDenied

	Outputs
	$msgOutput

	Pseudocode
	1. Ask for username
	2. Store username
	3. Ask for password
	4. Store password
	5. Compare password to stored password
		a. Ensure password also checks for upper-/lower-case
	6. If password matches, set output message to Welcome note.
	7. If passwrod does not match, set output message to Denied note.
	8. Display note.
-->

	<inner-column>

		<?php

		// $username = null;
		$inputPassword = null;

		// $realUsername
		$realPassword = "Password123";
		$msgWelcome = "<p class='welcome'>Welcome</p>";
		$msgDenied = "<p class='denied'>I don't you. Stranger Danger!</p>";

		$msgOutput = null;
			
		if(isset($_POST["submitted"])) {

			//assign the input variables
			$inputPassword = $_POST["password"];
			
			//compare the passwords and assign message accordingly
			if(strcmp($inputPassword, $realPassword) === 0) {

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