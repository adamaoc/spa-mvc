<?php

class ProductsModel
{
	public function getProducts()
	{
		//flexhub.amandaholtzinger.com/?json=
		$api = APISLUG.'get_category_posts&category_slug=product';

		$products = getData($api);

		$products = $this->listProducts($products, 0, 6);

		return $products;
	}

	public function getProduct($slug)
	{
		//flexhub.amandaholtzinger.com/?json=get_post&slug=test-product-one
		$api = APISLUG.'get_post&slug='.$slug;

		$data = getData($api);

		return $data;
	}

	public function getTopProducts($apislug, $startnum, $endnum) 
	{
		//flexhub.amandaholtzinger.com/?json=get_category_posts&slug=top-product
		$api = $apislug.'get_category_posts&slug=top-product';

		$data = getData($api);
		
		for($i = $startnum; $i < $endnum; ++$i) {
			$productarr = $data['posts'][$i];
			$formattedarr = $this->formatProduct($productarr);
			$products[] = $formattedarr;
		}

		return $products;
	}

	public function getCategories()
	{
		//flexhub.amandaholtzinger.com/?json=get_category_index
		$api = APISLUG.'get_category_index';
		$cats = getData($api);
		$data = $cats['categories'];

		$catarr = array();

		foreach ($data as $cat) {
			if($cat['slug'] !== "product") {
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