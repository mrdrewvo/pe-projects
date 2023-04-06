<?php
	$title = $section["title"] ?? "Arcu suscipit massa aliquam proin amet";
	$class = $section["class"] ?? "";
	$titleClass = $section["titleClass"] ?? null;
	$tagline = $section["tagline"] ?? "Luctus felis sit lectus tristique diam ornare bibendum. Arcu auctor suspendisse luctus amet bibendum pellentesque lorem. Malesuada lobortis tristique tortor,";
	$actions = $section["actions"] ?? ["actions" => ["type" => "link", "text" => "Link", "url" => "?", "style" => "dark"]];
?>

<section class="hero-module <?=$class?>">
	<inner-column>
		<hero-module>
			<h1 <?php if($titleClass) { ?>class="<?=$titleClass?>"<?php } ?>><?=$title?></h1>
			<p class="calm-voice"><?=$tagline?></p>
			<action-section>
				<?php foreach($actions as $action) { ?>
					<?php include("templates/components/$action[type]/template.php");?>
				<?php } ?>
			</action-section>
			
		</hero-module>
	</inner-column>
</section>
