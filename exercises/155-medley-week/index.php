<!doctype html>

<html lang='en'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>155 Medley Week Layouts</title>
		<meta name='description' content=''>
		<meta property='og:image' content=''>

		<link rel='stylesheet' href='styles/site.css'>
	</head>

	<body>
		<header class="site-header">
			<inner-column>
				<?php include('templates/modules/mast-head/template.php'); ?>
			</inner-column>	
		</header>

		<main>
			<section class="layout-1" id="layout-1">
				<inner-column>
					<?php include('templates/modules/layout-1/template.php'); ?>
				</inner-column>
			</section>

			<section class="layout-2" id="layout-2">
				<inner-column>
					<?php include('templates/modules/layout-2/template.php'); ?>	
				</inner-column>
			</section>

			<?php include('templates/modules/layout-3/template.php'); ?>
		</main>

		<footer class="site-footer">
			<inner-column>
				<a href="../../index.php" class="link">Back to Drew Vo Home</a>
			</inner-column>
		</footer>
	</body>

</html>