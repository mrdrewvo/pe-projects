<section class="article-grid"> 

	<inner-column>
	
		<article-module>
				
			<article-module-banner>
				
				<h2 class="attention-voice">This is an "Article grid" module. This is its heading.</h1>	

				<p>Again, we totally just made that up. It's a box with boxes in it.</p>
			</article-module-banner>

			<ul class="article-list">
				
				<?php

					$articleData = json_decode(file_get_contents("data/article-grid.json"),true);

					foreach($articleData as $article) {

						$title = $article["title"] ?? "default title";
						$blurb = $article["blurb"];
						$button = $article["button"];

						include ("article-card.php");
					}
				?>	
			</ul>		
		</article-module>
	</inner-column>
</section>