<div class="row">
	<div class="small-12 columns">      
		<h1><?= $data['pagetitle'] ?></h1>
	</div>

	<?php foreach ($data['products'] as $product) : ?>
		<div class="small-12 medium-4 columns">
			<div class="panel toplinks">
				<h4><?= $product['title']; ?></h4>
				
				<?php if($product['thumb']) : ?>
				<div class="img-wrap">
					<img src="<?= $product['thumb'] ?>" alt="<?= $product['title']; ?>" />
				</div>		
				<?php endif; ?>
			
				<?= $product['excerpt']; ?>
				<a href="/products/product/<?= $product['slug']; ?>" class="small button">Go to Product</a>          
			</div>
		</div>
	<?php endforeach; ?>
</div>
		
