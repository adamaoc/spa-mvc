<?php

class Product extends Controller 
{

	public function index($slug = '')
	{
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$sitelinks = $modelLinks->getSiteLinks();
		$product = $modelProducts->getProduct($slug);

		$headerdata = array(
			"pagename" => "Product Name",
			"sitenav" => $sitelinks
		);

		$pagedata = $product;

		$this->view('products/product', array(
			"headerdata" => $headerdata,
			"product" => $pagedata
		));
	}

}
