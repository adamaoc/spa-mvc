<div class="be-section">
	<div class="container">
	
	<?php foreach ($data as $item) : ?>
		<div class="what-we-do col-1-3">
			<div class="img-wrap <?= $item->class ?>">
				<img src="<?= $item->image ?>" alt="<?= $item->alt ?>">
			</div>
			<h3 class="title"><?= $item->title ?></h3>
			<p><?= $item->details ?></p>
		</div>
	<?php endforeach; ?>

	</div>
</div>