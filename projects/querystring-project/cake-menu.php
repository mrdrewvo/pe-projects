<?php include('cake-data.php'); ?>

<h1>Cake Menu</h1>


<ul>
	<?php foreach ($cakeData as $cake) { ?>
		<li class="cake">
		<cake-card>
			<picture><img src=<?=$cake["pictureURL"]?> alt=""></picture>
			<h2 class="name"><?=$cake["name"]?></h2>
			<h3 class="date"><?=$cake["date"]?></h3>
			<a href='?page=Cake Detail&cake=<?=$cake["id"]?>'>More Details</a>
		</cake-card>
	</li>

	<?php } ?>
</ul>