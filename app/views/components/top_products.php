<div class="row">
	<div class="small-12 columns">      
		<h3>Top Products</h3>
	</div>

	<?php foreach ($data as $product) : ?>
		<div class="small-12 medium-4 columns">
			<div class="panel toplinks">
				<h5><?= $product['title']; ?></h5>
				<?= $product['excerpt']; ?>
				<a href="/products/product/<?= $product['slug']; ?>" class="small button">Go to Product</a>          
			</div>
		</div>
	<?php endforeach; ?>
</div>