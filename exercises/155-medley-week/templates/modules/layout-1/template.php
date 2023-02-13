<?php
	$json = file_get_contents('data/articles.json');
	$articles = json_decode($json, true);?>

<layout-1>
	<ul class="article-list">
		<article class="first-article">
			<?php foreach($articles as $article) { ?>
				<?php if($article['type'] == 2) { ?>
					<h2><?=$article['heading']?></h2>
					
					<p><?=$article['text']?></p>
				<?php } ?>
			<?php } ?>
		</article>

		<?php foreach($articles as $article) { ?>
			<?php if($article['type'] == 3) { ?>
				<?php for($i=1; $i <= 6; $i++) { ?>
					<article>
						<h3><?=$article['heading']?></h3>

						<p><?=$article['text']?></p>
					</article>
				<?php } ?>
			<?php } ?>
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
