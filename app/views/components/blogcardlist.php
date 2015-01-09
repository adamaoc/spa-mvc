<ul class="blogcardlist">
	<?php foreach($data as $post) : ?>
	<li class="blogcard-item <?= $post['category'] ?>">
		<a href="/blog/<?= $post['slug'] ?>/" class="card-blog">
			<div class="title-wrap" style="background-image: url(<?= $post['imgthumb'] ?>)">
				<div class="img-filter"></div>
				<h3 class="blog-title"><?= $post['title'] ?></h3>
			</div>
			<article class="excerpt">
				<small class="meta"><?= $post['category'] ?> | <?= $post['pubdate'] ?></small><?= $post['excerpt'] ?>
			</article>
		</a>
	</li>
	<?php endforeach; ?>
</ul>

