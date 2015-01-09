<?php

class LinksModel
{
	public $dataroot = "data/pages/";
	public $socialdata = "social-data.json";
	public $sitelinkdata = "site-links.json";

	public function footerLinks()
	{
		$links = array();
		
		$links['social'] = $this->getSocialLinks();
		$links['site'] = $this->getSiteLinks();

		return $links;
	}

	public function getSocialLinks()
	{
		$data = file_get_contents($this->dataroot.$this->socialdata);
		$data = json_decode($data);

		$socialdata = $data->socialData;

		$links = array();

		foreach ($socialdata as $link) {
			$links[] = array(
				"slug" => $link->slug,
				"title" => $link->title,
				"url" => $link->link,
				"target" => "_blank"
			);
		}

		return $links;
	}

	public function getSiteLinks()
	{
		$data = file_get_contents($this->dataroot.$this->sitelinkdata);
		$data = json_decode($data);

		$sitelinks = $data->siteLinks;

		$links = array();

		foreach ($sitelinks as $link) {
			$links[] = array(
				"slug" => $link->slug,
				"pagename" => $link->pagename,
				"url" => $link->link,
				"target" => $link->target
			);
		}

		return $links;
	}

}