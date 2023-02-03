<?php

// function getTemplate($page)
	$page = null;
  
	if ( isset($_GET["page"]) ) {
  
   	$page = $_GET["page"]; //url?page=string
	} else {
      
		$page = "welcome"; //default
	}

	function getTemplate($page) {
		include("modules/" . $page . "/template.php");
	}
?>