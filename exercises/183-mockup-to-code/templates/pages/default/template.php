<?php if ( isset($pageData["sections"] ) ) { ?> 
	<?php foreach ($pageData["sections"] as $section) {
		$module = $section["module"];
		?>
		<?php styleGuideDetailLink($module, $pageData["id"]) ?>

		<?php include("templates/modules/$module/template.php");?>
	<?php } ?>
<?php } ?>
