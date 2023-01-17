<?php include("head.php"); ?>

<?php include("header.php"); ?>

<?php include("data/style-guide-data.php"); ?>

<main class="page-section site-main">
	
	<section class="index-page"> 

		<inner-column>

			<style-guide-mod>

				<h2>Style Guide</h2>

				<h2>Guiding Questions</h2>

				<ul>

					<?php foreach($styleGuideData as $styleGuidePoint) { ?>

						<li>

							<h3><?=$styleGuidePoint["question"]?></h3>

							<p><?=$styleGuidePoint["answer"]?></p>
						</li>

					<?php }?>
				
				</ul>
			</style-guide-mod>

			<success-checklist>
				<h2>Success Checklist</h2>

				<ol class="site-success">
					
					<?php foreach($siteSuccessList as $siteSuccessPoint) { ?>

						<li>
								
							<h3><?=$siteSuccessPoint["section"]?></h3>

							<ul>
								
								<?php foreach($siteSuccessPoint["requirements"] as $requirement) { ?>

									<li>
										
										<p><?=$requirement?></p>
									</li>
								<?php } ?>
							</ul>
						</li>

					<?php }?>
				</ol>
			</success-checklist>
		</inner-column>
	</section>
</main>

<?php //include("footer.php"); ?>