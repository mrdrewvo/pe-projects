<?php

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting(); // turn it on


// Use to print out arrays to double check
function formatCode($things) {
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


// Use to print the querystring in the URL - useful when your browser window is too small to see the string at the end
function printQueryString() {
	return $_SERVER['QUERY_STRING'];
}


function pageClass($page) {
	return "$page-page";
}


function pageTemplateClass($pageData) {
	if ( isset($pageData["template"]) ) {
		return "$pageData[template]-template";
	} else {
		return "default-template";
	}
}


function styleGuideDetailLink($type, $page) {
	if ($page == "style-guide") {
		$link = "/layouts/$type";
		echo "<a href='$link' target='$type'>LINK</a>";
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


// Not sure what this function does...
function magic_code_tm($code) {
  $patterns = ["/<(?!\/?mark\b[^>]*>)/", "/[\$]/"];
  $replacements = ['&lt;', "&#36;"];

  return preg_replace($patterns, $replacements, $code);
}