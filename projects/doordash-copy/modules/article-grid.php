<article-module>
		
	<article-module-banner>
		
		<h1 class="loud-voice">Grow with DoorDash</h1>	
	</article-module-banner>

	<ul class="article-list">
		
		<?php

			$articleData = json_decode(file_get_contents("data/article-grid.json"),true);

			foreach($articleData as $article) {

				$class = $article["class"];
				$pictureURL = $article["pictureURL"];
				$title = $article["title"] ?? "default title";
				$button = $article["button"];

				include ("article-card.php");
			}
		?>	
	</ul>		
</article-module>