<?php
	$class = $section["class"] ?? "dark";
	$logoImg = $section["logoImg"] ?? "dark";
?>

<footer class="page-section site-footer <?=$class?>">
	<inner-column>
		
		<footer-top-mod>
			<nav class="product-menu">
				<h4 class="strong-voice">Product</h4>
					<ul class="product-menu-list">
						<?php foreach([1,2,3,4,5,6] as $link) { ?>
							<a href="?">Link</a>
						<?php } ?>
					</ul>
			</nav>
			
			<nav class="info-menu">
				<h4 class="strong-voice">Information</h4>
					<ul class="info-menu-list">
						<?php foreach([1,2,3] as $link) { ?>
							<a href="?">Link</a>
						<?php } ?>
					</ul>
			</nav>
			
			<nav class="company-menu">
				<h4 class="strong-voice">Company</h4>
					<ul class="company-menu-list">
						<?php foreach([1,2,3,4] as $link) { ?>
							<a href="?">Link</a>
						<?php } ?>
					</ul>
			</nav>

			<subscribe-box>
				<h4 class="strong-voice">Subscribe</h4>
				<form action="submit">
					<input type="text" placeholder="Email address">
					<button type="submit" name="submitted">></button>
				</form>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, animi? Perferendis similique veniam voluptatem repellat eos distinctio unde dolores.</p>
			</subscribe-box>

		</footer-top-mod>

		<footer-bottom-mod>
			<picture><img src="<?=$logoImg?>" alt=""></picture>

			<boring-legal-stuff>
				<a href="?">Terms</a>
				<a href="?">Privacy</a>
				<a href="?">Cookies</a>
			</boring-legal-stuff>

			<social-links>
				<a href=""><img src="media/images/email-icon-gray.svg" alt=""></a>
				<a href=""><img src="media/images/email-icon-gray.svg" alt=""></a>
				<a href=""><img src="media/images/email-icon-gray.svg" alt=""></a>
			</social-links>
		</footer-bottom-mod>
	</inner-column>
</footer>