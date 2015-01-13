<?php

class ProductsModel
{
	public function getProducts($apislug)
	{
		$api = $apislug.'get_category_posts&category_slug=product';

		$data = json_decode(file_get_contents($api));

		$products = array(
			"data" => $data
		);

		return $products;
	}

	public function getTopProducts($apislug, $startnum, $endnum) 
	{
		//http://flexhub.amandaholtzinger.com/?json=get_category_posts&slug=top-product
		$api = $apislug.'get_category_posts&slug=top-product';

		$data = json_decode(file_get_contents($api), true);
		
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