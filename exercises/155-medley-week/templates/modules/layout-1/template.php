<?php
	$json = file_get_contents('data/articles.json');
	$articles = json_decode($json, true);?>

<layout-1>
	<h1 class="attention-voice">Layout 1</h1>

	<ul class="article-list">
		<li class="first-article">
			<article>
				<?php foreach($articles as $article) { ?>
					<?php if($article['type'] == "h2-article") { ?>
						<h2 class="strong-voice"><?=$article['heading']?></h2>
						
						<p><?=$article['text']?></p>
					<?php } ?>
				<?php } ?>
			</article>
		</li>

		<?php foreach (array_fill(0, 6, 'x') as $x) { ?>
			<li>
				<article>
					<h3><?=$articles[1]['heading']?></h3>
				
					<p><?=$articles[1]['text']?></p>
				</article>
			</li>
		<?php } ?>
	</ul>

	<graphics-grid>
		<?php for($i=1; $i <= 4; $i++) { ?>
			<picture>
				<img src="images/placeholders/graphics/landscape.jpg" alt="">
			</picture>
		<?php } ?>
	</graphics-grid>
</layout-1>
