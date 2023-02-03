<!DOCTYPE html>

<html lang="en">

<!-- ROUTER -->
<?php require('router.php'); ?>

<!-- SITE HEAD -->
<?php include("head.php"); ?>

<!-- SITE BODY: HEADER -->
<?php include('modules/header/template.php'); ?>

<!--SITE BODY: MAIN -->
<main class="page-section site-main">

	<inner-column>

		<?php getTemplate($page) ?>
	</inner-column>
</main>

<?php include("modules/footer/template.php"); ?>

</html>