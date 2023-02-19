<!DOCTYPE html>

<html lang="en">

<?php include('functions.php'); ?>

<?php require("head.php"); ?>

<?php
	/* ROUTER */
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	// GET THE PAGE DATA
	$pageDataFilePath = "data/pages/" . currentPage(). ".json";
	$pageData = null;
	if ( file_exists($pageDataFilePath) ) {
		$thePageJson = file_get_contents($pageDataFilePath);
		$pageData = json_decode($thePageJson, true);
	}
?>

<body >
	<?php include('templates/modules/header/template.php'); ?>
	
	<main class="page-section site-main">
		<?php
			if ($pageData) { 

				if ( !isset( $pageData["template"] ) ) {
					include('templates/pages/default.php');
				} else {
					include("templates/pages/$pageData[template]/template.php");
				}

			} else {
				http_response_code(404);
				include('templates/pages/404/template.php');
			}
		?>
	</main>

	<?php include("templates/modules/footer/template.php"); ?>
</body>

</html>