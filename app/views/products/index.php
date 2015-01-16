<div class="row">
	<div class="small-12 columns">      
		<h1><?= $data['pagetitle'] ?></h1>
	</div>

	<div class="small-12 columns">
		<ul class="inline-list catlist">
			<li><h3 class="">Categories</h3></li>
			<?php foreach ($data['categories'] as $cat) : ?>
				<li class="catlink">
					<a href="/products/category/<?= $cat ?>"><?= $cat ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>


	<ul class="small-block-grid-3">
	<?php foreach ($data['products'] as $product) : ?>
		<li class="">
			<div class="panel toplinks">
				<h4><?= $product['title']; ?></h4>
				
				<?php if($product['thumb']) : ?>
				<div class="img-wrap">
					<img src="<?= $product['thumb'] ?>" alt="<?= $product['title']; ?>" />
				</div>		
				<?php endif; ?>
			
				<?= $product['excerpt']; ?>
				<a href="/products/product/<?= $product['slug']; ?>" class="small button expand">Go to Product</a>          
			</div>
		</li>
	<?php endforeach; ?>
	</ul>


	<?php //getComponent("pagination", array($data['prevpage'], $data['nextpage'], 'blog', $data['maxpagecount'])); ?>
</div>
		
