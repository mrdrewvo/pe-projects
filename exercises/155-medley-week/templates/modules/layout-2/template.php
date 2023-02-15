<?php
	$json = file_get_contents('data/articles.json');
	$articles = json_decode($json, true);?>

<layout-2>
	<h1 class="attention-voice">Layout 2</h1>

	<ul class="article-list">
		<?php foreach($articles as $article) { ?>
			<?php if($article['type'] == "h2-article") { ?>
				<li class="first-article">
					<article>
						<h2 class="strong-voice"><?=$article['heading']?></h2>
						
						<p><?=$article['text']?></p>
					</article>
				</li>
			<?php } ?>
		<?php } ?>
			
		<?php foreach($articles as $article) { ?>
			<?php if($article['type'] == "h3-article") { ?>
				<?php for($i=1; $i<=4; $i++) { ?>
					<li>
						<article>
							<picture class="logo">
								<img src="images/logo.svg" alt="">
							</picture>
						
							<h3><?=$article['heading']?></h3>
						
							<p><?=$article['text']?></p>
						</article>
					</li>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</ul>
</layout-2>