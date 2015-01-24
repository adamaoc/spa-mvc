<?php

class Sitemap extends Controller 
{
	public $pages = '';
	public $Links = '';
	public $Products = array();
	public $Services = array();

	public function __construct() 
	{
		$links = $this->model('LinksModel');
		$this->Links = $links->getSiteLinks();

		$model = $this->model('ProductsModel');
		// pull in all product pages
		$products = $model->getAll('product');
		foreach ($products['posts'] as $key => $product) {
			$this->Products[] = array(
				"pagename" => $product['title'],
				"slug" => $product['slug'],
				"url" => "/product/".$product['slug']."/"
			);
		}

		// pull in all service pages
		$services = $model->getAll('service');
		foreach ($services['posts'] as $key => $service) {
			$this->Services[] = array(
				"pagename" => $service['title'],
				"slug" => $service['slug'],
				"url" => "/service/".$service['slug']."/"
			);
		}

		// build pages array
		$pages = array(
			"Pages" => $this->Links,
			"Products" => $this->Products,
			"Services" => $this->Services
		);

		$this->pages = $pages;
	}

	public function index()
	{
		$headerdata = array(
			"pagename" => "Sitemap",
			"sitenav" => $this->Links
		);

		$this->view('sitemap/index', array(
			"headerdata" => $headerdata,
			"pages" => $this->pages
		));
	}

	public function xml()
	{
		$pages = $this->pages;

		$this->specialView('sitemap/xml', array(
			"pages" => $pages
		));
	}
}