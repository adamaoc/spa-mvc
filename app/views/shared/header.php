<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?= $data['pagename'] ?> | <?= SITENAME ?></title>
        
        <meta name="description" content="More about Amanda Holtzinger and her Massage and Spa Services and Products. <?= $data['pagename'] ?> | <?= SITENAME ?>">
        
        <meta name="author" content="ampnetmedia.com">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="google-site-verification" content="RE_JaVcfwCfhbUSCzZkBzajDm-K3JGL_dP9cpy2EuI4" />

        <meta name="msvalidate.01" content="B038142E19DDC9427F7BB86F8022EE9C" />

        <link rel="stylesheet" href="/assets/css/main.css">

        <?php getComponent('favicons'); ?>

        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <header class="siteheader">
	        <div class="h-phonebox">
	        	<p><strong>Phone:</strong></p>
	        	<?php getComponent('phonenumber'); ?>
	        </div>
	        <div class="h-logo">
		        <h1>
		        	<a href="/">
			        	<span>Amanda Holtzinger</span>
			        	<small>Massage &amp; Spa</small>
		        	</a>
		        </h1>
	        </div>
	        <div class="h-location">
	        	<p><strong>Location:</strong></p>
	        	<p>
	        		<span><?= ADDRESS ?></span>
	        		<span><?= LOCATION ?></span>
	        	</p>
	        </div>
        </header>	

        <nav class="sitenav">
        	<ul>
        		<li class="homelink"><a href="/">Home</a></li>
	        	<?php foreach ($data['sitenav'] as $nav) : ?>
	        		<li>
	            		<a href="<?= $nav['url'] ?>">
	            			<?= $nav['pagename'] ?>
	            		</a>
	        		</li>
	        	<?php endforeach; ?>
	        </ul>
        </nav>

	    <main class="page-wrap">