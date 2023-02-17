<!DOCTYPE html>

<html lang="en">

<?php require('router.php'); ?>

<?php include('functions.php'); ?>

<?php require("head.php"); ?>

<?php include('modules/header/template.php'); ?>

<main class="page-section site-main">
		<?php getPageTemplate($page) ?>
</main>

<?php include("modules/footer/template.php"); ?>

</html>