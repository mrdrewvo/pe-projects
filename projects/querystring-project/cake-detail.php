<?php include("cake-data.php"); ?>

<?php
	if ( isset($_GET["cake"]) ) {
		$cakeId = $_GET["cake"];
	}

	foreach ($cakeData as $cake) {

		if ($cake["id"] == $cakeId) {
			$cakeDetail = $cake;
		}
	}
?>

<?php if ( isset($cakeDetail) ) { ?>

	<cake-detail-mod>
		
		<picture>
			
			<img src=<?=$cakeDetail["pictureURL"]?> alt="">
		</picture>

		<cake-detail-text>
		
			<h1>"<?=$cakeDetail["name"]?>"</h1>

			<p><span><?=$cakeDetail["date"]?></span> - <?=$cakeDetail["story"]?></p>

			<h2>Composition</h2>

			<ul>

				<?php

				foreach($cakeDetail["composition"] as $part => $detail) { ?>	

					<li>
						<?=$part?>: <?=$detail?>
					</li>
				<?php } ?>
			</ul>
		</cake-detail-text>
	</cake-detail-mod>
<?php } else {?>	

	<h1>No cake found.</h1>

<?php } ?>