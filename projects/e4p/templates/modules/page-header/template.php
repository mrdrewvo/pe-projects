<?php
	$title1 = $section["title1"] ?? "This is the page-header title";
	$title2 = $section["title2"] ?? "Many pages will utilize this <code>page-header</code> module. It includes the main page title. and a supporting pargaraph to get the visitor aquinted with the page's goals";
?>

<header class='page-header'>
	<inner-column>
		<h1><?=$title1?></h1>

		<h1><?=$title2?></h1>
	</inner-column>
</header>