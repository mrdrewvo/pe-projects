<!doctype html>

<html lang='en'>

<!-- ROUTER -->
<?php require('router.php'); ?>

<!-- SITE HEAD -->
<?php include('head.php'); ?>

<!-- SITE BODY: HEADER -->
<?php include('header.php'); ?>

<!--SITE BODY: MAIN -->
<main class="body-section">

	<inner-column>

		<main-mod>
			
			<?php getTemplate($page) ?>
		</main-mod>
	</inner-column>
</main>

<!--SITE BODY: FOOTER -->
<?php include('footer.php'); ?>

</html>