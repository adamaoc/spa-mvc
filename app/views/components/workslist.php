<ul class="worklist">
	<?php foreach($data as $post) : ?>
	<li class="workitem <?= $post['category'] ?>">
		<a href="/work/<?= $post['slug'] ?>/" class="worksbox">
			<h3><?= $post['title'] ?></h3>
		</a>

		<small class="meta">
			<?= $post['category'] ?> | <?= $post['pubdate'] ?>
		</small>

		<a href="/work/<?= $post['slug'] ?>/" class="details">
			<div class="imgwrap">
				<img src="/assets/img/<?= $post['imgthumb'] ?>" alt="<?= $post['title'] ?>" />
			</div>

			<article class="excerpt">
				<?= $post['excerpt'] ?>
			</article>
		</a>
	</li>
	<?php endforeach; ?>
</ul>

