<ul class="bloglist">
	<?php foreach($data as $post) : ?>
	<li class="blogitem <?= $post['category'] ?>">
		<a href="/blog/<?= $post['slug'] ?>/" class="worksbox">
			<h3><?= $post['title'] ?></h3>
		</a>

		<small class="meta">
			<?= $post['category'] ?> | <?= $post['pubdate'] ?>
		</small>

		<a href="/blog/<?= $post['slug'] ?>/" class="details">
			<div class="imgwrap">
				<img src="<?= $post['imgthumb'] ?>" alt="<?= $post['title'] ?>" />
			</div>

			<article class="excerpt">
				<?= $post['excerpt'] ?>
			</article>
		</a>
	</li>
	<?php endforeach; ?>
</ul>

