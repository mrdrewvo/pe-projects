<?php
	$title = $section["title"] ?? "Arcu suscipit massa aliquam proin amet";
	$tagline = $section["tagline"] ?? "Luctus felis sit lectus tristique diam ornare bibendum. Arcu auctor suspendisse luctus amet bibendum pellentesque lorem. Malesuada lobortis tristique tortor,";
	$actions = $section["actions"] ?? ["actions" => ["type" => "link", "text" => "Link", "url" => "?", "style" => "dark"]];
?>

<section class="hero-module">
	<inner-column>
		<hero-module>
			<h1><?=$title?></h1>
			<p><?=$tagline?></p>				
			<?php foreach($actions as $action) { ?>
				<?php include("templates/components/$action[type]/template.php");?>
			<?php } ?>
		</hero-module>
	</inner-column>
</section>
