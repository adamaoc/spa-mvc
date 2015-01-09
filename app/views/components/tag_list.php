<?php foreach ($data as $tag) : 
	$tag = trim($tag); ?>
	<a href="/blog/tag/<?= $tag ?>"><?= $tag ?></a>
<?php endforeach; ?>