<?php

class About extends Controller 
{
	public function index()
	{
		$about = $this->model('AboutModel');
		$linksdata = $this->model('LinksModel');
		$sitenav = $linksdata->getSiteLinks();
		$footerdata = $linksdata->footerLinks();

		$headerdata = array(
			"title" => "About ampnet media - the Dallas, Texas Freelance Web Developer who is looking to help take your company get online. / Adam Moore developing in Dallas, Texas",
			"description" => $about->aboutText()
		);

		$pageheader = array(
			"title" => "about", 
			"class" => "page-header", 
			"subtitle" => "<small>ampnet(<span>media</span>)</small>", 
			"heroimg" => "background-image: url(/assets/img/home-banner.jpg);"
		);
		
		$this->view('about/index', array(
			'headerdata' => $headerdata,
			'sitenav' => $sitenav,
			'pageheader' => $pageheader,
			'footerdata' => $footerdata,
			"about-text" => $about->aboutText(),
			"specialties" => $about->specialtiesList(),
			"bedata" => $about->beData(),
			"social-data" => $about->socialData(),
			"moreaboutText" => $about->aboutText("moreAboutText")
		));
	}
}