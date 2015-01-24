<div class="row">
  <div class="large-12 columns">
    <h1><?= $data['headerdata']['pagename'] ?> <small><?= SITENAME ?></small></h1>
  </div>
</div>
    
<div class="row container">
	<div class="large-12 columns">
	
		<?php foreach ($data['pages'] as $key => $pages) : ?>
			<h2><?= $key ?></h2>
			<ul>
				<?php foreach ($pages as $page) : ?>
					<li>
						<a href="<?= $page['url'] ?>">
							<?= $page['pagename'] ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endforeach; ?>

	</div>
</div>


