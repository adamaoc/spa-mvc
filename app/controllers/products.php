<?php

class Products extends Controller 
{

	public $Products = '';
	public $startNum = 0;
	public $endNum = 6;

	public function __construct()
	{
		$this->Products = $this->model('ProductsModel');
	}

	public function index()
	{
		$modelProducts = $this->model('ProductsModel');
		$modelLinks = $this->model('LinksModel');

		$products = $modelProducts->getProducts($this->startNum, $this->endNum);
		$categories = $modelProducts->getCategories();
		$sitelinks = $modelLinks->getSiteLinks();

		$pagetitle = "All Products";

		$headerdata = array(
			"pagename" => "Products",
			"sitenav" => $sitelinks
		);

		$this->view('products/index', array(
			"products" => $products,
			"headerdata" => $headerdata,
			"categories" => $categories,
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

	public function page($id = 1)
	{
		$pageCount = $this->Products->productCount();

		$this->startNum = $id * 2; // 2*6 = 12 -6 = 6
		$this->endNum = $id * 2; // 2*6 = 12 3*6=18 

		var_dump($pageCount);
		die;
	}

	public function category($slug = '')
	{	

		$modelProducts = $this->model('ProductsModel');
		$catlist = $modelProducts->getCategories();
		$modelLinks = $this->model('LinksModel');

		$sitelinks = $modelLinks->getSiteLinks();
		$categories = $modelProducts->getCategories();

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
				"categories" => $categories,
				"pagetitle" => $pagetitle
			));
		}else{
			$this->view('products/nonefound', array(
				"headerdata" => $headerdata
			));
		}
	}

}
