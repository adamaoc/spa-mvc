<dl class="aboutme-dl">
	<?php foreach ($data as $item) : ?>
		<dt><?= $item->title ?>:</dt>
		<dd>
			<a href="<?= $item->link ?>"><?= $item->username ?></a>
		</dd>
	<?php endforeach; ?>
</dl>