<?php include('data.php'); ?>

<h1>Cake Menu</h1>

<ul class="cake-list">

	<?php foreach ($cakeData as $cake) { ?>

		<li class="cake-card">

			<picture class="cake-pic">

				<img src=<?=$cake["pictureURL"]?> alt="">
			</picture>
			
			<h2 class="name">"<?=$cake["name"]?>"</h2>
			
			<div>
				
				<h3 class="date"><?=$cake["date"]?></h3>
				<a class="button" href='?page=detail&cake=<?=$cake["id"]?>'>More Details</a>
			</div>
		</li>
	<?php } ?>
</ul>