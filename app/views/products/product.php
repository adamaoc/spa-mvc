<?php $p = $data['product']['post']; ?>

<div class="row">
	<div class="large-12 columns">
		<h1><?= $p['title'] ?>
			<small class="hide"><?= SITENAME ?></small>
		</h1>
	</div>
</div>

<div class="row single-product">
	<div class="medium-4 columns img-wrap">
		<img src="<?= $p['thumbnail_images']['medium']['url'] ?>" alt="<?= $p['title'] ?> | <?= SITENAME ?>" />
	</div>
	<div class="medium-8 columns details">
		<?= $p['content'] ?>
	</div>
</div>