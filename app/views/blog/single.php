<?php $post = $data['post']; ?>

<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>
<article class="container">
	<div class="meta">
		Posted on <?= $post['pubdate'] ?> | 
		Category <?= $post['category'] ?>
	</div>
	<div class="post">
		<?= $post['content'] ?>
	</div>

	<div class="tags-wrap">
		<?php //getComponent("tag_list", $post['tagsarr']); ?>
	</div>
	<p>
		<a href="/blog/" class="btn">&laquo; back to blog list</a>
	</p>
</article>
<?php getFooter($data['footerdata']); ?>
