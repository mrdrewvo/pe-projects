<?php
	$logoImg = $section["logoImg"] ?? "https://peprojects.dev/images/landscape.jpg";
	$siteMenu = $section["siteMenu"] ?? ["Home", "Updates", "Services", "Features", "About Us"];
	$langImg = $section["langImg"] ?? "https://peprojects.dev/images/square.jpg";
	$langAbbr = $section["langAbbr"] ?? "EN";
?>

<header class="page-section site-header">
	<inner-column>
		<mast-head>
			<a href="?" class="logo">
				<picture><img src="<?=$logoImg?>" alt=""></picture>
			</a>

			<nav class="site-menu">
				<?php foreach($siteMenu as $siteMenuLink) { ?>
					<a href="?"><?=$siteMenuLink?></a>
				<?php } ?>
			</nav>

			<a href="?" class="language">
				<picture><img src="<?=$langImg?>" alt=""></picture>
				<p><?=$langAbbr?></p>
			</a>

			<a href="?" class="button-login"></a>
		</mast-head>
	</inner-column>
</header>