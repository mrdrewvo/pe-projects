<?php $json = file_get_contents("data/pages/style-guide.json"); ?>
<?php $styleGuideData = json_decode($json, true); ?>

<section class="style-guide-page"> 
	<inner-column>
		<style-guide-mod>
			<h1>Style Guide</h2>
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