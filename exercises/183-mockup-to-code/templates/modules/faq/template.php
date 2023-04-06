<?php
	$class = $section["class"];
	$title = $section["title"] ?? "FAQ Heading";
	$tagline = $section["tagline"] ?? "LPellentesque cras adipiscing tempus libero vel nullam mauris tellus. Aliquam ultrices tellus consequat amet, lectus aliquam est in neque.";
	$faqs = $section["faqs"] ?? [
			"question"=> "Question",
			"answer"=> "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque, necessitatibus."
	];
?>

<section class="faq-module <?=$class?>">
	<inner-column>

		<faq-module>
			<h2 class="loud-voice"><?=$title?></h2>

			<p><?=$tagline?></p>
			
			<ul class="faq-list">
				<?php foreach($faqs as $faq) { ?>
					<li class="faq">
						<details>
							<summary><?=$faq["question"]?></summary>
							<p><?=$faq["answer"]?></p>
						</details>
					</li>
				<?php } ?>
			</ul>
		</faq-module>
	

	</inner-column>
</section>