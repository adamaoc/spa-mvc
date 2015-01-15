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
	image
	</div>
	<div class="large-8 columns">
		<?= $p['content'] ?>
	</div>
</div>