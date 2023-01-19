<home-mod>

	<about>

		<h1>Welcome to our humble bakeshop!</h1>

		<p>Started by hobby baker, Drew Vo, Sterling Circle is a boutique bakeshop focused on custom modern-style cakes and macarons.</p>

		<p>Named after the street where it all began in 2018, Sterling Circle Bakeshop has created hundreds of special orders for our customers.</p>
	</about>

	<?php include("cake-data.php"); ?>

	<?php foreach($cakeData as $cake) {
			
		if($cake["id"] == 10) { ?>

			<cake-feature-card>
				
				<h1>Our latest creation</h1>

				<cake-feature>
					
					<picture><img src=<?=$cake["pictureURL"]?> alt=""></picture>

					<cake-feature-text>	
						
						<h2>"<?=$cake["name"]?>"</h2>

						<p><span><?=$cake["date"]?></span> - <?=$cake["story"]?></p>

						<a href='?page=Cake Detail&cake=<?=$cake["id"]?>'>More Details</a>

					</cake-feature-text>
				</cake-feature>
			</cake-feature-card>
		<?php };
	}; ?>
</home-mod>