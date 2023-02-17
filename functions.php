<?php

$page = null;

// function enableErrorReporting() {
// 	error_reporting(E_ALL);
// 	ini_set('display_errors', '1');
// }
// enableErrorReporting(); // turn it on


// Use to print out arrays to double check
function show($things) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}


// Get file path - but always from the root
// Usage e.g. include( getFile("templates/components/thing.php") );
function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}


function printQueryString() {
	return $_SERVER['QUERY_STRING'];
}


function currentPage() {
	if(isset($_GET["page"])) {
		return $_GET["page"];
	} else
		return "home";
}


// Router for php framework based on current page... or 404
function getPageTemplate() {
	$filePath = "templates/pages/" . currentPage() . "/template.php";
	if ( file_exists($filePath) ) {
	   	include($filePath);
	} else { 
		include("templates/pages/404/template.php");
	}
}


// Use to apply an "active" class and specific styling to the current page (e.g highlight the nav link of the current page)
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
