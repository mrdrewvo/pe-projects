<?php
	$class = $section["class"] ?? "";
	$sectionTitle = $section["sectionTitle"] ?? "This is a Section Title";
	$title = $section["title"] ?? "Etiam nulla lectus amet nunc molestie at vulputate.";
	$tagline = $section["tagline"] ?? "Neque, pulvinar vestibulum non aliquam.";

	$content = $section["content"] // ?? ["actions" => ["type" => "link", "text" => "Link", "url" => "?", "style" => "dark"]];
?>

<section class="content-center <?=$class?>">
	<inner-column>
		<content-center>
			<h2><?=$sectionTitle?></h2>
			<h3 class="loud-voice"><?=$title?></h3>
			<p><?=$tagline?></p>
			<?php foreach($content as $contentItem) { ?>
				<?php include("templates/components/$contentItem[type]/template.php");?>
			<?php } ?>
		</hero-module>
	</inner-column>
</section>
