<!DOCTYPE html>

<html lang="en">

	<?php include("head.php"); ?>

	<body>

		<?php include("header.php"); ?>
		
		<main class="page-section site-main">

			<section class="hero">
				
				<inner-column>
		
					<?php include("modules/cta.php"); ?>
				</inner-column>
			</section>

			<section class="grow-benefits">
				
				<inner-column>
					
					<?php include("modules/article-grid.php"); ?>	
				</inner-column>
			</section>

			<section class="bottom-banner">
				
				<inner-column>

					<bottom-banner-module>
						
						<picture><img src="images/logo-full-footer.svg" alt=""></picture>

						<a href="#">Become a Partner</a>	
					</bottom-banner-module>
				</inner-column>
			</section>
		</main>		
		

		<?php include("footer.php"); ?>

		<div id="chat-bubble">
			<!-- A fake / hidden checkbox is used as click reciever,so you can use the :checked selector on it. -->
			<input type="checkbox" />
			<!-- Some spans to act as a hamburger. They are acting like a real hamburger, not that McDonalds stuff. -->
			<picture>
				
				<?php include("images/chat-bubble.php"); ?>
				<?php include("images/chat-close.php"); ?>
			</picture>
			<!-- Too bad the menu has to be inside of the button but hey, it's pure CSS magic. -->
			
			<div id="chat-window">
				
				<div id="chat-title">
					<h3>Chat Window</h3>
				</div>
				
				<div id="chat-message">
					<p>Start message here...</p>
				</div>
			</div>

			<div id="support">
				
				<h3>Still have questions?</h3>

				<p>Chat with one of our experts - available&nbsp24/7! →</p>
			</div>
		</div>
	</body>
</html>