<div class="row">
	<div class="small-12 columns">      
		<h3>Top Products</h3>
	</div>

	<?php foreach ($data as $product) : ?>
		<div class="small-12 medium-4 columns">
			<div class="panel toplinks">
				<h5><?= $product['title']; ?></h5>
				
				<?php if($product['thumb']) : ?>
				<div class="img-wrap">
					<img src="<?= $product['thumb'] ?>" alt="<?= $product['title']; ?>" />
				</div>		
				<?php endif; ?>
			
				
				<a href="/product/<?= $product['slug']; ?>/" class="small button expand">Learn more</a>          
			</div>
		</div>
	<?php endforeach; ?>
</div>