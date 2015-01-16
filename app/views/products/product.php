<?php $p = $data['product']['post']; ?>

<div class="row">
	<div class="large-12 columns">
		<h1><?= $p['title'] ?>
			<small class="hide"><?= SITENAME ?></small>
		</h1>
	</div>
</div>

<div class="row">
	<div class="large-4 columns">
		<img src="<?= $p['thumbnail_images']['medium']['url'] ?>" alt="<?= $p['title'] ?> | <?= SITENAME ?>" />
	</div>
	<div class="large-8 columns">
		<?= $p['content'] ?>
	</div>
</div>