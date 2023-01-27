<header class="page-section site-header">

	<inner-column>
		
		<mast-head>

			<div class="ham-site-menu-and-logos">

				<!-- site menu for small mobile devices -->
				<?php include("modules/menu-site-hamburger.php"); ?> 

				<!-- logo for small mobile devices -->
				<a href="index.php" class="short-logo"> 

					<picture>

						<img src="images/logo-short.svg" alt="">
					</picture>
				</a>

				<!-- logo for large mobile devices and desktop -->
				<a href="index.php" class="full-logo">
					
					<picture>

						<img src="images/logo-full.svg" alt="">
					</picture>
				</a>
			</div>

			<!-- site menu for large mobile devices and desktop -->
			<nav class="full-site-menu">

				<?php include("modules/menu-site-links.php"); ?>
			</nav>

			<!-- user menu for all views -->
			<?php include("modules/menu-user.php"); ?> 
		</mast-head>
		
	</inner-column>
</header>