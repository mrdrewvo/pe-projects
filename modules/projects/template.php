<?php include("data/projects-data.php"); ?>

<section class="projects">
	<inner-column>
		<featured-projects-title>
			<h2>Featured Projects</h2>
			
			<h2>My latest work!</h2>
		</featured-projects-title>

		<ul class="featured-projects-list">
			<?php foreach($projectsData as $project) { ?>
				<li>
					<a class="project-module" href="projects/<?=$project['link']?>" target="_blank" rel="noopener noreferrer">
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