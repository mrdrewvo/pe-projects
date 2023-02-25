<?php
	$heading = $section["heading"] ?? "Default heading here";
	$flipped = (isset($flipped)) ? "flipped" : "";
	$imgLink = $section["imgLink"] ?? "https://peprojects.dev/images/square.jpg";
?>

<section class="graphic-diptych-module <?=$flipped?>">
	<inner-column>
		<picture>
			<img src='<?=$imgLink?>' alt='$todo'>
		</picture>
		
		<div class='content'>
			<h2 class='attention-voice'><?=$heading?></h2>
			
			<?php foreach($section["content"] as $content) { ?>
				<p><?=$content?></p>
			<?php } ?>
		</div>
	</inner-column>
</section>
