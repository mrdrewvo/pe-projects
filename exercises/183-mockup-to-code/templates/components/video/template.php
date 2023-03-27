<!-- LINK DATA FROM TEMPLATE DATA FILE -->
<?php $class = $contentItem['class'] ?? null; ?>
<?php $sources = $contentItem["sources"]; ?>
<?php $sourceURL = $source["url"] ?? "https://peprojects.dev/videos/sky.mp4"; ?>
<?php $sourceType = $source["type"] ?? "mp4"; ?>

<video <?php if($class) { ?> class="<?=$class?>" <?php } ?> controls>
	<?php foreach($sources as $source) { ?>
  		<source src="<?=$source["url"]?>" type="<?=$source["type"]?>">
  	<?php } ?>
</video>