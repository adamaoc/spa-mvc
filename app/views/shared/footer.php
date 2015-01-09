<footer class="site-footer">
	<nav class="footer-nav">
		<?php getComponent("footer_links", $data); ?>
	</nav>
	<p><small>all rights reserved &copy;<?= date('Y'); ?> ampnetmedia - Dallas, Texas web development</small></p>
</footer>  

	<script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>

	<script src="/assets/js/main.js"></script>

        <script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-9674179-2']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
        </script>
    </body>
</html>