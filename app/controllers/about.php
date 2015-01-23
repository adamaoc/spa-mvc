<?php

class About extends Controller 
{
	public function index()
	{
		$modelAbout = $this->model('AboutModel');
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$about = $modelAbout->getAbout(APISLUG);
		$products = $modelProducts->getTopProducts(0, 3);
		$sitelinks = $modelLinks->getSiteLinks();

		$pagetitle = $about['title'];

		$headerdata = array(
			"pagename" => $pagetitle,
			"sitenav" => $sitelinks
		);

		$this->view('about/index', array(
			"about" => $about,
			"products" => $products,
			"headerdata" => $headerdata
		));
	}
}