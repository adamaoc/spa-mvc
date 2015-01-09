<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>
<section class="main-about">
	<div class="container">
		
		<blockquote>
			<?= $data['about-text'] ?>
		</blockquote>

		<h2>specialties</h2>
		<?php getComponent("specialties_block", $data['specialties']); ?>
		
		<h2>more about me</h2>
		<?php getComponent("moreabout", $data['moreaboutText']); ?>

		<?php getComponent('social_list', $data['social-data']); ?>
	</div>
</section>

<?php getComponent("besection", $data['bedata']); ?>

<?php getFooter($data['footerdata']); ?>