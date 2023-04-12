<!DOCTYPE html>

<html lang="en"> 

<?php include("head.php"); ?>

<?php
	// ROUTER
	$page = "home";
	if ( isset($_GET['page']) ) {
		$page = $_GET['page'];
	}

	// ACTIVE CLASS FUNCTION
	function isActivePage($name) {	
		if ( isset($page) ) {
			$page = $_GET["page"];
		} else {
			$page = "home"; // defaults class "active" if no query string
		}

		if ($page == $name) {
			echo 'class="active"'; // assigns class "active" on the current page
		}
	}

	include("header.php");

	// EXERCISE PAGE
	$pageFilePath = "templates/pages/$page/template.php";
	if ( file_exists($pageFilePath) ) { 
		include($pageFilePath);
	} else {
		http_response_code(404);
		include('templates/pages/404/template.php');
	}
?>

<?php include("footer.php"); ?>

