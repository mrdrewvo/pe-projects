<!-- LINK DATA FROM TEMPLATE DATA FILE -->
<?php $url = $action["url"]; ?>
<?php $style = $action["style"] ?? "default-dark"; ?>
<?php $langImg = $section["langImg"] ?? "https://peprojects.dev/images/square.jpg"; ?>
<?php $langAbbr = $section["langAbbr"] ?? "EN"; ?>


<a href="<?=$url?>" class="language-selector <?=$style?>">
	<picture><img src="<?=$langImg?>" alt=""></picture>
	<p><?=$langAbbr?></p>
</a>