<!DOCTYPE html>

<html lang="en">

<?php include('functions.php'); ?>

<?php require("head.php"); ?>

<?php include('templates/modules/header/template.php'); ?>

<p><?=printQueryString();?></p>

<main class="page-section site-main">
		<?php getPageTemplate() ?>
</main>

<?php include("templates/modules/footer/template.php"); ?>

</html>