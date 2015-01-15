<?php

class AboutModel
{
	public function getAbout($apislug)
	{
		$api = $apislug.'get_page&slug=about';

		$data = getData($api);

		$homeAbout = array(
			"title" => $data['page']['title'],
			"content" => $data['page']['content'],
			"thumb" => $data['page']['thumbnail_images']['medium']['url']
		);

		return $homeAbout;
	}
}