<!doctype html>

<html lang='en'>

<!-- ROUTER -->
<?php
  $page = null;
  if ( isset($_GET["page"]) ) {
    $page = $_GET["page"]; //url?page=string
  } else {
      $page = "Home";
  }

?>

<!-- SITE HEAD -->
<?php include('head.php'); ?>

<!-- SITE BODY: HEADER -->
<?php include('header.php'); ?>

<!--SITE BODY: MAIN -->
<main class="body-section site-main">

	<inner-column>

		<main-mod>
			
			<?php

				if ($page == "Home") {
					include('home.php');
				}
				if ($page == "Cake Menu") {
					include('cake-menu.php');
				}
				if ($page == "Cake Detail") {
					include('cake-detail.php');
				}
				if ($page == "Add a Cake") {
					include('create.php');
				}
			?>
		</main-mod>
	</inner-column>
</main>

<!--SITE BODY: FOOTER -->
<?php include('footer.php'); ?>

</html>