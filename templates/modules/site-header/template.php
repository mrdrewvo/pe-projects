<?php $json = file_get_contents("data/site-menu-data.json"); ?>
<?php $siteMenuData = json_decode($json, true); ?>

<header class="page-section site-header">
	<header-bar>
		<!-- <p><?=printQueryString();?></p> -->
	</header-bar>

	<inner-column>
		<mast-head>
			<a href="?page=home" <?=isActivePage("home")?>>
				<p>Drew Vo</p>
			</a>

			<nav class="site-menu">
				<?php foreach($siteMenuData as $siteMenuLink) { ?>
					<?php if ($siteMenuLink['headerLink'] == "true") { ?>
						<a href="?page=<?=$siteMenuLink['slug']?>" <?php isActivePage($siteMenuLink['slug']); ?>><?=$siteMenuLink['linkName']?></a>
					<?php } ?>
				<?php } ?>
			</nav>
		</mast-head>		
	</inner-column>
</header>