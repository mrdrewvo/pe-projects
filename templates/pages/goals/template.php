<?php $json = file_get_contents("data/goals-data.json"); ?>
<?php $goalsData = json_decode($json, true); ?>

<main class="page-section site-main">
	
	<section class="goals-page"> 

		<inner-column>

			<?php foreach($goalsData as $timespan) { ?>

				<goals-mod>
							
					<h2 class="goal-timespan"><?=$timespan["title"]?></h2>
					
					<ol class="goal-list">

						<?php foreach($timespan["goals"] as $goal) {?>

							<li>
								
								<?=$goal?>
							</li>							
						<?php } ?>
					</ol>
				</goals-mod>		
			<?php } ?>
		</inner-column>
	</section>
</main>