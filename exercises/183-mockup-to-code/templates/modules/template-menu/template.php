<?php $json = file_get_contents("data/template-menu-data.json"); ?>
<?php $templateMenuData = json_decode($json, true); ?>

<template-menu>
	<inner-column>		
		<nav class="template-menu">
			<p>Template: </p>
			<?php foreach($templateMenuData as $templateMenuLink) { ?>
				<a href="?page=<?=$templateMenuLink['slug']?>" <?php isActivePage($templateMenuLink['slug']); ?>><?=$templateMenuLink['linkName']?></a>
			<?php } ?>
		</nav>
		<a href="?page=style-guide" <?php isActivePage('style-guide'); ?>>Style Guide</a>
		<p>Querystring: <?=printQueryString();?></p>		
	</inner-column>
</template-menu>