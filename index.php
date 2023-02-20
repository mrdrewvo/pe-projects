<!DOCTYPE html>

<html lang="en">

<?php include('functions.php'); ?>

<?php require("head.php"); ?>

<?php
	// ROUTER
	$page = "home";
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
	<?php include('templates/modules/site-header/template.php'); ?>
	
	<main class="page-section site-main">
		<?php
			// PAGE TEMPLATE
			if ($pageData) { 
				if ( !isset( $pageData["template"] ) ) {
					include('templates/pages/default/template.php');
				} else {
					include("templates/pages/$pageData[template]/template.php");
				}
			} else {
				http_response_code(404);
				include('templates/pages/404/template.php');
			}
		?>
	</main>

	<?php include("templates/modules/site-footer/template.php"); ?>
</body>

</html>