
<html>
	<head>
		<title>Lesson 99 - PHP Templates</title>
	</head>

	<body>
		<?php

			$noun="banana";
			$pluralnoun1="fire trucks";
			$verb1="cook"; //(present tense)//
			$verb2="fly";
			$pluralbodypart="arms";
			$adjective1="wavy";
			$pluralnoun2="Cocker Spaniel puppies";
			$adjective2="marvelous";

			echo "<h1>An Awesome Madlib</h1>";

			echo "<p>Today, every student has a computer small enough to fit into their " . $noun . ". You can solve any math problem by simply pushing the computer’s little " . $pluralnoun1 . ".</p1>";
		?>

		<p>Computers can add, multiply, divide, and <?php echo $verb1; ?>. They can also <?php echo $verb2; ?> better than a human.</p>

		<p>Some computers have their own <?=$pluralbodypart?>. Other’s have a/an <?=$adjective1?> screen that shows all kinds of <?=$pluralnoun2?> and <?=$adjective2?> figures.</p>

		<?php

			$name1="Marvin";
			$number1="20";
			$noun1="cups";
			$name2="Mike";
			$number2="4405";
			$adjective3="pudgy";
			$noun2="tree";
			$websiteurl="tinder.com";
			$company="Khol's";

			echo "<h1>Drew's Madlib</h1>";

			echo "<p>" . "$name1" . " has " . $number1 . " " . $noun1 . "(s) and " . $name2 . " has " . $number2 . " " . $noun1 . "(s). </p>"

		?>
		
		<p>Together, they have <?php echo $number1 + $number2 . " " . $noun1; ?>(s).</p>

		<p><?=$name1?> is <?=$adjective3?>, but capitalistic so they found a way to cheat <?=$name2?> of their <?php echo $noun1 . "(s) by trading just " . 1 . " " . $noun2; ?>.</p>

		<p><?=$name2?> got their revenge by putting a scathing review of <?=$name1?> on <a href="https://<?=$websiteurl?>"><?php echo $websiteurl; ?></a> and that's the downfall story of <?=$company?>.</p>

	</body>
</html>