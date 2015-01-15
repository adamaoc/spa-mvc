<?php

class Products extends Controller 
{

	public function index()
	{
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$products = $modelProducts->getProducts();
		$sitelinks = $modelLinks->getSiteLinks();

		$pagetitle = "All Products";

		$headerdata = array(
			"pagename" => "Products",
			"sitenav" => $sitelinks
		);

		$this->view('products/index', array(
			"products" => $products,
			"headerdata" => $headerdata,
			"pagetitle" => $pagetitle
		));
	}

	public function product($slug = '')
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

	public function category($slug = '')
	{	

		$modelProducts = $this->model('ProductsModel');
		$catlist = $modelProducts->getCategories();
		$modelLinks = $this->model('LinksModel');

		$sitelinks = $modelLinks->getSiteLinks();

		$headerdata = array(
			"pagename" => "Products",
			"sitenav" => $sitelinks
		);
		
		if(in_array($slug, $catlist)) 
		{
			$products = $modelProducts->getProductsCat($slug, 0, 6);

			$pagetitle = "All Products in Category ".$slug;

			$this->view('products/index', array(
				"products" => $products,
				"headerdata" => $headerdata,
				"pagetitle" => $pagetitle
			));
		}else{
			$this->view('products/nonefound', array(
				"headerdata" => $headerdata
			));
		}
	}

}
