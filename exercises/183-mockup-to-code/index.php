<!DOCTYPE html>

<html lang="en">

<?php include('functions.php'); ?>

<?php require("head.php"); ?>

<?php
	// ROUTER
	$page = "template01";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	// PAGE DATA
	$pageDataFilePath = "data/pages/$page.json";
	$pageData = null;
	if ( file_exists($pageDataFilePath) ) {
		$json = file_get_contents($pageDataFilePath);
		$pageData = json_decode($json, true);
	}
?>

<body class='<?=pageClass($page)?> <?=pageTemplateClass($pageData)?>'>
	<!-- MENU FOR DESIGNERS TO SEE THE DIFFERENT TEMPLATES -->
	<?php include('templates/modules/template-menu/template.php'); ?>	
	
	<!-- PAGE BUILD OUT PER TEMPLATE DATA FILE -->
	<main class="page-section site-main">
		<?php
			// PAGE TEMPLATE
			if ($pageData) { 
				include('templates/pages/default/template.php');
			} else {
				http_response_code(404);
				include('templates/pages/404/template.php');
			}
		?>
	</main>
</body>

</html>