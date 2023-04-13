<?php
	$json = file_get_contents("data/exercises-data.json");
	$formsData = json_decode($json, true);
?>

<header class="page-section site-header">
	<inner-column>

		<mast-head>
			<a href="?page=home" <?=isActivePage("home")?>>
				<h1 class="loud-voice">Exercises for Programmers</h1>
			</a>

			<nav class="site-menu">
				<?php foreach($formsData as $formData) { 
					$formNum = $formData["formNum"];
					$formName = $formData["formName"];
					$formSrc = $formData["formSrc"];?>
					
					<a href="?page=<?=$formSrc?>" <?php isActivePage($formSrc); ?>>
						<?=$formNum?> <?=$formName?>
					</a>
				<?php } ?>
			</nav>
		</mast-head>
		
	</inner-column>
</header>

<main class="page-section site-main">