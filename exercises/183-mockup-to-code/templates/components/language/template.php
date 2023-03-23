<!-- LINK DATA FROM TEMPLATE DATA FILE -->
<?php
	$url = $action["url"];
	$style = $action["style"];
	$langImg = $section["langImg"] ?? "https://peprojects.dev/images/square.jpg";
	$langAbbr = $section["langAbbr"] ?? "EN";
?>

<a href="<?=$url?>" class="language-selector <?=$style?>">
	<picture><img src="<?=$langImg?>" alt=""></picture>
	<p><?=$langAbbr?></p>
</a>