</main> <?php // opened in the header ?>

<footer class="site-footer">
	<div class="row">
		<div class="small-12 medium-4 columns">
			<h5>Site Navigation</h5>
			<ul>
				<?php foreach ($data['sitenav'] as $nav) : ?>
				<li>
					<a href="/<?= $nav['url'] ?>/">
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

	<script src="/assets/js/main.js"></script>

        <script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-CODE-HERE']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
        </script>
    </body>
</html>