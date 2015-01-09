<ul class="social-links">
<?php foreach ($data['social'] as $link) : ?>
	<li class="<?= $link['slug'] ?>">
		<a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
			<?= $link['slug'] ?>
		</a>
	</li>
<?php endforeach; ?>
</ul>

<ul class="site-links">
<?php foreach ($data['site'] as $link) : ?>
	<li class="<?= $link['slug'] ?>">
		<a href="<?= $link['url'] ?>" target="<?= $link['target'] ?>">
			<?= $link['slug'] ?>
		</a>
	</li>
<?php endforeach; ?>
	<li class="sitemap">
		<a href="/sitemap/">sitemap</a>
	</li>	
</ul>

<ul class="local-links">
	<li class="Forney">
		<a href="/forney-tx-web-development">Forney, TX</a>
	</li>

	<li class="Dallas"><a href="/dallas-tx-web-development">Dallas, TX</a><li class="Heath"><a href="/heath-tx-web-development">Heath, TX</a><li class="Rockwall"><a href="/rockwall-tx-web-development">Rockwall, TX</a>
</ul>