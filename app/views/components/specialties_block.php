<ul>
	<?php foreach ($data as $item) : ?>
		<li>
			<h4><?= $item->title ?></h4>
			<p><?= $item->details ?></p>
		</li>
	<?php endforeach; ?>
</ul>