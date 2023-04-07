<?php
	$class = $section["class"] ?? null;
	$sectionTitle = $section["sectionTitle"] ?? null;
	$title = $section["title"] ?? "Etiam nulla lectus amet nunc molestie at vulputate.";
	$tagline = $section["tagline"] ?? "Neque, pulvinar vestibulum non aliquam.";

	$content = $section["content"] ?? null;
?>

<section class="feature <?=$class?>">
	<inner-column>
		
		<feature-module>
			
			<?php if($sectionTitle) { ?>
				<h2><?=$sectionTitle?></h2>
			<?php } ?>
			
			<h3 class="loud-voice"><?=$title?></h3>
			
			<p><?=$tagline?></p>
			
			<ul class="feature-cards">
				<?php foreach([1,2,3,4,5,6] as $card) { ?>
					<li class="feature-card">
						<svg height="30" width="30">
  							<circle cx="15" cy="15" r="15" fill="var(--lightBlurple2)"/>
						</svg>

						<h4>Card Title</h4>

						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
					</li>
				<?php } ?>
			</ul>
		</feature-module>
	
	</inner-column>
</section>
