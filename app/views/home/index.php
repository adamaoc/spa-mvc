<div class="row">
	<div class="large-12 columns">
		<h1>Welcome <small class="hide"><?= SITENAME ?></small></h1>
	</div>
</div>
    
<div class="row container">
	<div class="large-12 columns">
		<div class="panel about-panel row">
			<div class="small-12 medium-4 columns">
				<img src="<?= $data['about']['thumb']; ?>" alt="About <?= SITENAME ?>" />
				<p>Call me: <?php getComponent('phonenumber'); ?></p>
			</div>
			<div class="small-12 medium-8 columns">
				<?= $data['about']['content']; ?>
			</div>
		</div>
	</div>
</div>

<?php getComponent('top_products', $data['products']); ?>