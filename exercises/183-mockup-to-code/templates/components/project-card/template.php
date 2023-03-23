<!-- LIST DATA: PROJECT CARD -->
<?php $slug = $listItem['slug']; ?>
<?php $title = $listItem["title"]; ?>
<?php $description = $listItem["description"]; ?>
<?php $directLink = $listItem["directLink"]; ?>

<project-card>
	<picture>
		<img src="images/project-thumbnails/<?=$slug?>.jpg" alt="">
	</picture>
			
	<h3><?=$title?></h3>

	<p><?=$description?></p>

	<div class="project-buttons">
		<?php if( isset($listItem["caseStudyLink"]) ) { ?>
			<?php $caseStudyLink = $listItem["caseStudyLink"]; ?>
			
			<a class="button" href="<?=$caseStudyLink?>" target="project" rel="noopener noreferrer">Case Study</a>
		<?php } ?>

		<a class="button" href="<?=$directLink?>" target="project" rel="noopener noreferrer">Direct Link</a>
	</div>
</project-card>	