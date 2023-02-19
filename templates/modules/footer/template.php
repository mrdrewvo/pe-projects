<?php 
	$year = date("Y");
?>

<footer class="page-section site-footer">
	<inner-column>
		<footer-mod>
			<nav class="site-menu">
				<?php foreach($siteMenuData as $siteMenuLink) { ?>
					<a href="?page=<?=$siteMenuLink['slug']?>" <?php isActivePage($siteMenuLink['slug']); ?>><?=$siteMenuLink['linkName']?></a>
				<?php } ?>
			</nav>
				
			<nav class="contact-menu">
				<a href="mailto:andrew.d.vo@gmail.com" target="project" rel="noopener noreferrer">Email</a>
					
				<a href="https://github.com/mrdrewvo" target="project" rel="noopener noreferrer">GitHub</a>
			
				<a href="https://mrdrewvo.substack.com/" target="project" rel="noopener noreferrer">Substack</a>
			
				<a href="https://www.linkedin.com/in/drewvo/" target="project" rel="noopener noreferrer">LinkedIn</a>
			
				<a href="https://codepen.io/mrdrewvo" target="project" rel="noopener noreferrer">CodePen</a>
			</nav>
			
			<p>© <?=$year?> Drew Vo. All Rights Reserved.</p>
		</footer-mod>
	</inner-column>
</footer>