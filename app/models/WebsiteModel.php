<?php


class WebsiteModel
{
	public $title;
	public $tagline;
	public $phone;

	public function buildWeb()
	{
		$api = APISLUG.'get_page&slug=website';

		$data = json_decode($api);

		$this->title = $data->page->custom_fields->Title;
		
	}
}