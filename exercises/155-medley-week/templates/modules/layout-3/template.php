<?php
	$json = file_get_contents('data/articles.json');
	$articles = json_decode($json, true);?>

<layout-3>
	<h1 class="attention-voice">Layout 3</h1>

	<ul class="article-list">
		<?php foreach($articles as $article) { ?>
			<?php if($article['type'] == "h2-article") { ?>
				<li class="first-article">
					<article>
						<h2 class="attention-voice"><?=$article['heading']?></h2>
						
						<p><?=$article['text']?></p>
					</article>
				</li>
			<?php } ?>
		<?php } ?>
			
		<?php foreach($articles as $article) { ?>
			<?php if($article['type'] == "h3-article") { ?>
				<?php for($i=1; $i<=3; $i++) { ?>
					<li>
						<article>
							<picture class="logo">
								<?php include('images/layout3-logo.svg'); ?>
							</picture>
						
							<h3><?=$article['heading']?></h3>
						
							<p><?=$article['text']?></p>
						</article>
					</li>
				<?php } ?>
			<?php } ?>
		<?php } ?>
	</ul>
</layout-3>
