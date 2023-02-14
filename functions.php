<?php

function enableErrorReporting() {
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
}
enableErrorReporting(); // turn it on


function show($things) {
	echo "<code class='show-code'>";
		echo '<pre>';
			print_r($things);
		echo '</pre>';
	echo '</code>';
}

// get file path - but always from the root
function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}

// usage:  include( getFile("templates/components/thing.php") );