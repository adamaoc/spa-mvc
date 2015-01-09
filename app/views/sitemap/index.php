<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>
<section class="main-sitemap">
	<div class="container">
		<h3>main Pages</h3>
		<ul>
		<?php foreach ($data['pages']['mainlinks'] as $link) : ?>
			<li>
				<a href="/<?= $link['slug'] ?>/">
					<?= $link['pagename'] ?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<h3>Blog Posts</h3>
		<ul>
		<?php foreach ($data['pages']['bloglist'] as $link) : ?>
			<li>
				<a href="/blog/<?= $link['slug'] ?>/">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
		<h3>Works</h3>
		<ul>
		<?php foreach ($data['pages']['worklist'] as $link) : ?>
			<li>
				<a href="/work/<?= $link['slug'] ?>/">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach; ?>
		</ul>
	</div>
</section>
<?php getFooter($data['footerdata']); ?>