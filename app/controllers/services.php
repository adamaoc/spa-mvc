<?php

class Services extends Controller 
{

	public $Products = '';
	public $ProductType = 'service';
	public $SectionSlug = 'service';
	public $catID = 7;
	public $Cats = '';

	public $Links = '';

	public $Listings = '';

	public $currentPage = 1;
	public $page = 1;
	public $totalProducts = '';
	public $totalPages = '';
	public $productsPerPage = 6;

	public $startNum = 0;
	public $endNum = 6;

	public function __construct()
	{
		// find out what pagination page is current
		if(!empty($_GET['pg'])) {
			$this->currentPage = $_GET['pg'];	
		}
		
		$this->Products = $this->model('ProductsModel');
		$this->Cats = $this->Products->getCategories($this->catID);

		$this->Listings = $this->helper('Listings');

		$links = $this->model('LinksModel');
		$this->Links = $links->getSiteLinks();
	}

	public function index()
	{
		$this->totalProducts = $this->Products->productCount($this->ProductType);
		$this->totalPages = ceil($this->totalProducts / $this->productsPerPage);

		$pagenums = $this->Listings->pagination($this->currentPage, $this->productsPerPage, $this->totalPages);
		$this->startNum = $pagenums[0];
		$this->endNum = $pagenums[1];

		$products = $this->Products->getProducts($this->ProductType, $this->startNum, $this->endNum);

		$pagination = array(
			"totalPages" => $this->totalPages,
			"currentPage" => $this->currentPage
		);

		$pagetitle = "All Services";

		$headerdata = array(
			"pagename" => "Services",
			"sitenav" => $this->Links
		);

		$this->view('products/index', array(
			"products" => $products,
			"headerdata" => $headerdata,
			"categories" => $this->Cats,
			"pagetitle" => $pagetitle,
			"sectionslug" => $this->SectionSlug,
			"pagination" => $pagination
		));
	}

	public function category($slug = '')
	{	
		$categories = $this->Cats;

		$headerdata = array(
			"pagename" => "Service Category",
			"sitenav" => $this->Links
		);
		
		if(in_array($slug, $categories)) 
		{
			$this->totalProducts = $this->Products->productCatCount($slug);
			$this->totalPages = ceil($this->totalProducts / $this->productsPerPage);

			$pagenums = $this->Listings->pagination($this->currentPage, $this->productsPerPage, $this->totalPages);

			$this->startNum = $pagenums[0];
			$this->endNum = $pagenums[1];

			$products = $this->Products->getProductsCat($slug, $this->startNum, $this->endNum);

			$pagetitle = "All Services in Category ".$slug;

			$pagination = array(
				"totalPages" => $this->totalPages,
				"currentPage" => $this->currentPage
			);

			$this->view('products/index', array(
				"products" => $products,
				"headerdata" => $headerdata,
				"categories" => $categories,
				"pagetitle" => $pagetitle,
				"sectionslug" => $this->SectionSlug,
				"pagination" => $pagination
			));
		}else{
			$this->view('products/nonefound', array(
				"headerdata" => $headerdata
			));
		}
	}

}
