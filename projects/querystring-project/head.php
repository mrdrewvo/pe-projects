<head>

<?php 
	function pageTitle($page) {

		if ($page == "home") {

			echo "Home";
		} elseif ($page == "list") {

			echo "Cake Menu";
		} elseif ($page == "detail") {

			echo "Cake Info";
		} elseif ($page == "create") {

			echo "Add a Cake";
		}
	}
?>

	<title><?=pageTitle($page);?> | Sterling Circle Bakeshop</title>
	<!--add favicon later time permitting <link rel="icon" href="[LINK]" type="image/x-icon" /> -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- style sheets -->
	<link rel="stylesheet" href="css/style.css">

	<meta name="description" content="Sterling Circle Bakeshop | Named after the street of our first  bakery, SCB is home to baker Drew Vo and his modern-style cakes and macarons.">
	<meta property="og:title" content="<?=pageTitle($page);?> | Sterling Circle Bakeshop">
	<meta property="og:url" content="https://peprojects.dev/alpha-6/drew/challenge-1/index.html">
	<meta name="og: description" content="Sterling Circle Bakeshop | Named after the street of our first  bakery, SCB is home to baker Drew Vo and his modern-style cakes and macarons.">
	<meta property="og:image" content="https://peprojects.dev/alpha-6/drew/images/scb-logo-meta.png">
	<meta property="og:image:secure_url" content="https://peprojects.dev/alpha-6/drew/images/scb-logo-meta.png">
	<meta property="og:image:type" content="image/jpeg">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="630">
	<meta property="og:image:alt" content="A blob-style graphic of letters D and V">
</head>

