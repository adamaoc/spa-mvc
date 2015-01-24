<div class="row">
	<div class="small-12 columns">      
		<h1><?= $data['pagetitle'] ?></h1>
	</div>

	<div class="small-12 columns">
		<ul class="inline-list catlist">
			<li><h3 class="">Categories</h3></li>
			<?php foreach ($data['categories'] as $cat) : ?>
				<li class="catlink">
					<a href="/<?= $data['sectionslug'] ?>s/category/<?= $cat ?>/"><?= $cat ?></a>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>


	<ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
	<?php foreach ($data['products'] as $product) : ?>
		<li class="">
			<div class="panel toplinks">
				<h4><?= $product['title']; ?></h4>
				
				<?php if($product['thumb']) : ?>
				<div class="img-wrap">
					<img src="<?= $product['thumb'] ?>" alt="<?= $product['title']; ?>" />
				</div>		
				<?php endif; ?>
			
				
				<a href="/<?= $data['sectionslug'] ?>/<?= $product['slug']; ?>/" class="small button expand">Learn more</a>          
			</div>
		</li>
	<?php endforeach; ?>
	</ul>

	
	<?php getComponent("pagination", array($data['pagination'])); ?>
</div>
		
