<?php

class Home extends Controller 
{

	public function index()
	{
		$modelAbout = $this->model('AboutModel');
		$modelProducts = $this->model('ProductsModel');

		$about = $modelAbout->getAbout(APISLUG);
		$products = $modelProducts->getTopProducts(APISLUG, 0, 3);

		$this->view('home/index', array(
			"about" => $about,
			"products" => $products
		));
	}

}
