<!-- PAGE DATA -->
<?php $listDataFile = $section['listDataFile']; ?>
<?php $listComponent = $section['listComponent']; ?>
<?php $id = $pageData['id']; ?>

<!-- LIST DATA -->
<?php $json = file_get_contents("data/$listDataFile-data.json"); ?>
<?php $listData = json_decode($json, true); ?>

<section class="list-module">
	<inner-column>
		<ul class="<?=$id?>-list">
			<?php foreach($listData as $listItem) { ?>
				<li class="list-item">
					<?php include("templates/components/$listComponent/template.php"); ?>
				</li>
			<?php } ?>
		</ul>
	</inner-column>
</section>