<?php

class ProductsModel
{
	public function getProducts($slug, $startnum, $endnum)
	{
		//flexhub.amandaholtzinger.com/?json=
		$api = APISLUG.'get_category_posts&category_slug='.$slug;

		$products = getData($api);

		$products = $this->listProducts($products, $startnum, $endnum);

		return $products;
	}

	public function productCount($slug)
	{
		//flexhub.amandaholtzinger.com/?json=
		$api = APISLUG.'get_category_posts&category_slug='.$slug;

		$products = getData($api);

		$count = count($products['posts']);

		return $count;

	}

	public function productCatCount($slug)
	{
		$api = APISLUG.'get_category_posts&slug='.$slug;

		$products = getData($api);

		$count = count($products['posts']);

		return $count;
	}

	public function getProduct($slug)
	{
		//flexhub.amandaholtzinger.com/?json=get_post&slug=test-product-one
		$api = APISLUG.'get_post&slug='.$slug;

		$data = getData($api);

		return $data;
	}

	public function getTopProducts($startnum, $endnum) 
	{
		//flexhub.amandaholtzinger.com/?json=get_category_posts&slug=top-product
		$api = APISLUG.'get_category_posts&slug=top-product';

		$data = getData($api);
		
		for($i = $startnum; $i < $endnum; ++$i) {
			$productarr = $data['posts'][$i];
			$formattedarr = $this->formatProduct($productarr);
			$products[] = $formattedarr;
		}

		return $products;
	}

	public function getCategories($catID)
	{
		//flexhub.amandaholtzinger.com/?json=get_category_index
		$api = APISLUG.'get_category_index';
		$cats = getData($api);
		$data = $cats['categories'];

		$catarr = array();

		$prodCats = $catID;

		foreach ($data as $cat) {
			if($cat['parent'] == $prodCats) {
				$catarr[] = $cat['slug'];	
			}
		}
		return $catarr;
	}

	public function getProductsCat($slug, $startnum, $endnum)
	{
		//flexhub.amandaholtzinger.com/?json=get_category_posts&slug=product
		$api = APISLUG.'get_category_posts&slug='.$slug;

		$products = getData($api);

		$prodarr = $this->listProducts($products, $startnum, $endnum);

		return $prodarr;
	}

	public function listProducts($data, $startnum, $endnum)
	{
		$startnum = $startnum - 1;
		$datacount = count($data['posts']);
		if($endnum > $datacount) {
			$endnum = $datacount;
		}

		for($i = $startnum; $i < $endnum; ++$i) {
			$productarr = $data['posts'][$i];
			$formattedarr = $this->formatProduct($productarr);
			$products[] = $formattedarr;
		}

		return $products;
	}

	public function formatProduct($product)
	{
		$formatted = array(
			"title" => $product['title'],
			"thumb" => $product['thumbnail_images']['medium']['url'],
			"excerpt" => $product['excerpt'],
			"content" => $product['content'],
			"slug" => $product['slug']
		);

		return $formatted;
	}
}