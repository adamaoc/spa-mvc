</main> <?php // opened in the header ?>

<footer class="site-footer">
	<div class="row">
		<div class="small-12 medium-4 columns">
			<h5>Site Navigation</h5>
			<ul>
				<?php foreach ($data['sitenav'] as $nav) : ?>
				<li>
					<a href="<?= $nav['url'] ?>">
						<?= $nav['pagename'] ?>
					</a>
				</li>
      			<?php endforeach; ?>
      		</ul>
    	</div>
    	
    	<div class="small-12 medium-4 columns">
      		<h5>Footer Section</h5>
    	</div>
    	
    	<div class="small-12 medium-4 columns">
      		<h5>Footer Section</h5>
    	</div>
  	</div>

  	<div class="small-12 columns copywrap">
  		<p class="copy"><small>Site designed and developed by <a href="http://ampnetmedia.com">ampnet(media)</a> | &copy; 2015 Amanda Holtzinger | all rights reserved</small></p>
  	</div>
</footer>

	<script src="/assets/js/main.min.js"></script>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-9674179-15', 'auto');
	  ga('send', 'pageview');

	</script>
    </body>
</html>