<?php $json = file_get_contents('data/projects-data.json'); ?>
<?php $projectsData = json_decode($json, true); ?>

<section class="projects-list">
	<inner-column>
		<ul>
			<?php foreach($projectsData as $project) { ?>
				<li class="project">
					<?php include('templates/components/project-card/template.php'); ?>
				</li>							
			<?php } ?>
		</ul>
	</inner-column>
</section>