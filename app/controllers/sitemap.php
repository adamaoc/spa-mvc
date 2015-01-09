<?php

class Sitemap extends Controller 
{
	public $pages = '';

	public function __construct() 
	{

		$linksdata = $this->model('LinksModel');
		$blogs = $this->model('BlogModel');
		$works = $this->model('WorksModel');
		$locals = $this->model('LocalsModel');

		$sitenav = $linksdata->getSiteLinks();
		$bloglist = $blogs->getAllPosts();
		$worklist = $works->getAllPosts();
		$locallist = $locals->legacyLocals();

		$pages = array(
			"mainlinks" => $sitenav,
			"bloglist" => $bloglist,
			"worklist" => $worklist,
			"locallist" => $locallist
		);

		$this->pages = $pages;
	}

	public function index()
	{
		$linksdata = $this->model('LinksModel');
		$sitenav = $linksdata->getSiteLinks();
		$footerdata = $linksdata->footerLinks();

		$pages = $this->pages;

		$headerdata = array(
			"title" => "Sitemap | Explore ampnetmedia from our easily accessable Site Map.",
			"description" => "This is the Sitemap for ampnet media."
		);

		$pageheader = array(
			"title" => "Sitemap", 
			"class" => "page-header", 
			"subtitle" => "<small>ampnet(<span>media</span>)</small>", 
			"heroimg" => "background-image: url(/assets/img/baseballfield-header-lg.jpg);"
		);
		$this->view('sitemap/index', array(
			'headerdata' => $headerdata,
			'sitenav' => $sitenav,
			'pageheader' => $pageheader,
			'footerdata' => $footerdata,
			"pages" => $pages
		));
	}

	public function xml()
	{
		$pages = $this->pages;

		$this->view('sitemap/xml', array(
			"pages" => $pages
		));
	}
}