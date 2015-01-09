<?php getHeader(array("nav" => $data['sitenav'], "headerdata" => $data['headerdata'])); ?>

<?php getComponent("pageheader", $data['pageheader']); ?>


<div class="home-work-list">
	<?php getComponent("recentwork", $data['worklist']); ?>
</div>

<section class="home-blog-list">
	<div class="container">
		<h3>Recent Blog Posts</h3>
		<?php getComponent("bloglist", $data['bloglist']); ?>
		<a href="/blog/" class="btn">View all blog posts &raquo;</a>
	</div>
</section>

<section class="homecontent">
	<?php getComponent("core_strengths"); ?>
</section>	

<div class="home-besection">
	<?php getComponent("besection", $data['bedata']); ?>
</div>

<section class="homeabout">
	<?php getComponent("about_flash", $data['about-text']); ?>
</section>

<?php getFooter($data['footerdata']); ?>