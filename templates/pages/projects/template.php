<?php $json = file_get_contents('data/projects-data.json'); ?>
<?php $projectsData = json_decode($json, true); ?>

<?php 
	include('templates/modules/page-header/template.php');
?>

<section>
	<inner-column>
		<ul class="featured-projects-list">
			<?php foreach($projectsData as $project) { ?>
				<li>
					<a class="project-module" href="projects/<?=$project['link']?>" target="project" rel="noopener noreferrer">
						<picture>
							<img src="images/project-thumbnails/<?=$project['link']?>.jpg" alt="">
						</picture>
								
						<h3><?=$project["title"]?></h3>

						<p><?=$project["description"]?></p>
					</a>
				</li>							
			<?php } ?>
		</ul>
	</inner-column>
</section>