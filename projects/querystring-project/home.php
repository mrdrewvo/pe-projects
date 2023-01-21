<h1>Welcome to our humble bakeshop!</h1>

<p>Sterling Circle is a boutique bakeshop focused on custom modern-style cakes and macarons, found by home baker, Drew Vo.</p>

<p>Named after the street where it all began in 2018, Sterling Circle Bakeshop has created hundreds of special orders for our customers.</p>

<?php include("data.php"); ?>

<?php

	foreach($cakeData as $cake) {
		
		if($cake["id"] == 10) { ?>

			<cake-feature-card>
				
				<h1>Our latest creation</h1>

				<cake-feature>
					
					<picture class="cake-pic">

						<img src=<?=$cake["pictureURL"]?> alt="">
					</picture>

					<cake-feature-text>	
						
						<h2>"<?=$cake["name"]?>"</h2>

						<p><span><?=$cake["date"]?></span> - <?=$cake["story"]?></p>

						<a href='?page=detail&cake=<?=$cake["id"]?>'>More Details</a>

					</cake-feature-text>
				</cake-feature>
			</cake-feature-card>
		<?php };
	};
?>