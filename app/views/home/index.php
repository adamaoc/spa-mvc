<?php getHeader(); ?>

<div class="row">
      <div class="large-12 columns">
        <h1>Welcome <small><?= SITENAME ?></small></h1>
      </div>
    </div>
    
    <div class="row container">
		<div class="large-12 columns">
			<div class="panel about-panel row">
				<div class="small-12 medium-4 columns">
					<img src="<?= $data['about']['thumb']; ?>" alt="About <?= SITENAME ?>" />
				</div>
				<div class="small-12 medium-8 columns">
					<?= $data['about']['content']; ?>
				</div>
			</div>
		</div>
	</div>


    <div class="row">
		<div class="small-12 columns">      
			<h3>Top Products</h3>
		</div>

		<?php foreach ($data['products'] as $product) : ?>
			<div class="small-12 medium-4 columns">
				<div class="panel toplinks">
					<h5><?= $product['title']; ?></h5>
					<?= $product['excerpt']; ?>
					<a href="/product/<?= $product['slug']; ?>" class="small button">Go to Product</a>          
				</div>
			</div>
		<?php endforeach; ?>
	</div>

    <footer class="site-footer">
      <div class="row">
        <div class="small-12 medium-4 columns">
          <h5>Footer Section</h5>
        </div>
        <div class="small-12 medium-4 columns">
          <h5>Footer Section</h5>
        </div>
        <div class="small-12 medium-4 columns">
          <h5>Footer Section</h5>
        </div>
      </div>
    </footer>