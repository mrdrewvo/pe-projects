<?php include ('data/articles.php'); ?>

<article-grid>
	<article-intro>
		<h2 class='attention-voice'>Heading for this section here</h2>

		<p>A short introduction explaining why these articles are here to help you understand if you want to read them.</p>
	</article-intro>

	<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

	</ul>

	<a class="plain-link" href="#">See all teams <span>→</span></a>
</article-grid>
