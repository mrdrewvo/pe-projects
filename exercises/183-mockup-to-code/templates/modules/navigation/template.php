<?php
	$class = $section["class"] ?? "";
	$logoImg = $section["logoImg"] ?? "https://peprojects.dev/images/landscape.jpg";
	$siteMenu = $section["siteMenu"] ?? ["Home", "About Us", "Services", "Contact Us"];
	$actions = $section["actions"] ?? ["actions" => ["type" => "link", "text" => "Link", "url" => "?", "style" => "dark"]];
?>

<header class="page-section site-header <?=$class?>"">
	<inner-column>
		<mast-head>
			<a href="?" class="logo">
				<picture><img src="<?=$logoImg?>" alt=""></picture>
			</a>

			<nav class="site-menu">
				<?php foreach($siteMenu as $siteMenuLink) { ?>
					<a
						href="<?=$siteMenuLink["url"]?>"
						<?php if($siteMenuLink["external"] == true) { ?>
							target="<?=siteMenuLink["target"]?>"
						<?php } ?>>
						<?=$siteMenuLink["text"]?>
					</a>
				<?php } ?>
			</nav>

			<action-section>
				<?php foreach($actions as $action) { ?>
					<?php include("templates/components/$action[type]/template.php");?>
				<?php } ?>
			</action-section>
		</mast-head>
	</inner-column>
</header>