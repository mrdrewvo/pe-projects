<?php $json = file_get_contents("data/style-guide-data.json"); ?>
<?php $styleGuideData = json_decode($json, true); ?>

<main class="page-section site-main">
	
	<section class="index-page"> 

		<inner-column>

			<style-guide-mod>

				<h2>Style Guide</h2>

				<h2>Guiding Questions</h2>

				<ul>

					<?php foreach($styleGuideData["Style Guide Vision"] as $styleGuidePoint) { ?>

						<li>

							<h3><?=$styleGuidePoint["question"]?></h3>

							<p><?=$styleGuidePoint["answer"]?></p>
						</li>

					<?php }?>
				
				</ul>
			</style-guide-mod>
		</inner-column>
	</section>
</main>

<?php //include("footer.php"); ?>