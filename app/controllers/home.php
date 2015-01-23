<?php

class Home extends Controller 
{

	public function index()
	{
		$modelAbout = $this->model('AboutModel');
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$about = $modelAbout->getAbout(APISLUG);
		$products = $modelProducts->getTopProducts(0, 3);
		$sitelinks = $modelLinks->getSiteLinks();

		$headerdata = array(
			"pagename" => "Home Page",
			"sitenav" => $sitelinks
		);

		$this->view('home/index', array(
			"about" => $about,
			"products" => $products,
			"headerdata" => $headerdata
		));
	}

}
