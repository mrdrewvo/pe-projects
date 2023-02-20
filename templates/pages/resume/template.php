<?php
	$json = file_get_contents('data/resume-data.json');
	$resumeData = json_decode($json, true);
?>

<?php 
	include('templates/modules/page-header/template.php');
?>

<?php foreach($resumeData as $section) { ?>
	<section>
		<inner-column>
			<h2 class='attention-voice'><?=$section["heading"]?></h2>

			<ol>
				<?php foreach($section["experiences"] as $experience) { ?>
					<li>
						<?php if($section["heading"] == "Work Experience") { ?>
							<h3><?=$experience["company"]?></h3>
							
							<ul>
								<?php foreach($experience["details"] as $detail) { ?>
									<li>
										<h4><?=$detail["role"]?></h4>
										<time><?=$detail["year"]?></time>
										<p><?=$detail["description"]?></p>
										<!-- <ul>
											<?php foreach($detail["tools"] as $tool) { ?>
												<li><?=$tool?></li>
											<?php } ?>
										</ul> -->
									</li>
								<?php } ?>
							</ul>
						<?php } elseif($section["heading"] == "Education") { ?>
							<li>
								<h4><?=$experience["degree"]?></h4>
								<p><?=$experience["institution"]?></p>
								<time><?=$experience["year"]?></time>
							</li>
						<?php } ?>
					</li>
				<?php } ?> 
			</ol>
		</inner-column>
	</section>	
<?php } ?>