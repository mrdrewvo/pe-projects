<?php include("head.php"); ?>

<?php include("header.php"); ?>

<?php include("data/goals-data.php"); ?>

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

<?php include("footer.php"); ?>