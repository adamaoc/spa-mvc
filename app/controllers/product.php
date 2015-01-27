<?php

class Product extends Controller 
{

	public function index($slug = '')
	{
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$sitelinks = $modelLinks->getSiteLinks();
		$product = $modelProducts->getProduct($slug);

		$title = $product['post']['title'];
		
		$headerdata = array(
			"pagename" => $title,
			"sitenav" => $sitelinks
		);

		$pagedata = $product;

		$this->view('products/product', array(
			"headerdata" => $headerdata,
			"product" => $pagedata
		));
	}

}
