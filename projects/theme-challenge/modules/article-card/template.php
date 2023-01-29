<?php
	$heading = $article['heading'];
	$description = $article['description'];
	$thumbnail = $article['thumbnail'];
?>

<article class='article-card'>
	<picture>

		<img src='images/articles/<?=$thumbnail?>' alt='$todo'>
	</picture>

	<text-content>

		<h3 class='strong-voice'><?=$heading?></h3>

		<p class='teaser'><?=$description?></p>

		<a class='button' href='#'>Call to action</a>
	</text-content>
</article>
