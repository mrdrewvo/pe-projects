<!DOCTYPE html>

<html lang="en">

	<?php include("modules/head.php"); ?>

	<body>

		<?php include("modules/header.php"); ?>
		
		<main class="page-section site-main">

			<?php include("modules/welcome-area.php"); ?>

			<?php 

				$sectionClass = "cta1";

				$ctaData = json_decode(file_get_contents("data/" . $sectionClass . ".json"),true);

				$title = $ctaData["title"];
				$blurb = $ctaData["blurb"];
				$button = $ctaData["button"];

				include("modules/call-to-action.php");
			?>

			<?php include("modules/article-grid.php"); ?>

			<?php 
				
				$sectionClass = "cta2";

				$ctaData = json_decode(file_get_contents("data/" . $sectionClass . ".json"),true);

				$title = $ctaData["title"];
				$blurb = $ctaData["blurb"];
				$button = $ctaData["button"];

				include("modules/call-to-action.php"); ?>
		</main>		
		
		<?php include("modules/footer.php"); ?>
	</body>
</html>