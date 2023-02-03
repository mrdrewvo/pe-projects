<header class="page-section site-header">

	<header-bar>
		
	</header-bar>

	<inner-column>
		
		<mast-head>

			<?php

				function isPage($name) {

					$page = null;

					if ( isset($page) ) {

						$page = $_GET["page"];
					} else {

						$page = "welcome"; // defaults class "active" if no query string
					}

					if ($page == $name) {

						echo 'class="active"'; // assigns class "active" on the current page
					}
				}
			?>

			<a href="?page=welcome" <?=isPage("welcome")?>>

				<h1>Drew Vo</h1>
			</a>

			<nav class="site-menu">

				<a href="?page=about" <?=isPage("about")?>>About Me</a>

				<a href="?page=projects" <?=isPage("projects")?>>Projects</a>
			</nav>
		</mast-head>		
	</inner-column>
</header>