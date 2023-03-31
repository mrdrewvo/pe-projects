<!-- LINK DATA FROM TEMPLATE DATA FILE -->
<?php $url = $action["url"]; ?>
<?php $style = $action["style"] ?? "default-dark"; ?>
<?php $langImg = $action["langImg"] ?? "https://peprojects.dev/images/square.jpg"; ?>
<?php $langAbbr = $action["langAbbr"] ?? "EN"; ?>


<a href="<?=$url?>" class="language-selector <?=$style?>">
	<picture><img src="<?=$langImg?>" alt=""></picture>
	<p><?=$langAbbr?></p>
</a>