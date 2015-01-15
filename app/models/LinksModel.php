<?php

class LinksModel
{

	public function getSiteLinks()
	{
		//http://flexhub.amandaholtzinger.com/?json=get_page_index
		$api = APISLUG.'get_page_index';

		// $data = json_decode(file_get_contents($api));
		$data = getData($api);

		$sitelinks = $data['pages'];

		$links = array();

		foreach ($sitelinks as $link) {
			if($link['slug'] !== "website") 
			{
				$links[] = array(
					"slug" => $link['slug'],
					"pagename" => $link['title'],
					"url" => $link['slug']
				);
			}
		}

		return $links;
	}

}