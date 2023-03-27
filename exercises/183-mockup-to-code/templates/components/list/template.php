<!-- LIST DATA -->
<?php $listName = $contentItem['listName'] ?? null; ?>
<?php $listDataFile = $contentItem['listDataFile'] ?? "template-list"; ?>
<?php $listComponent = $contentItem['listComponent'] ?? "list-card"; ?>

<!-- CARD DATA -->
<?php $json = file_get_contents("data/$listDataFile-data.json") ?? null; ?>
<?php $listData = json_decode($json, true) ?? null; ?>

<ul <?php if($class) { ?> class="<?=$class?>-list" <?php } ?> >
	<?php foreach($listData as $listItem) { ?>
		<li class="list-item">
			<?php include("templates/components/$listComponent/template.php"); ?>
		</li>
	<?php } ?>
</ul>