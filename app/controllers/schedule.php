<?php

class Schedule extends Controller 
{

	public function index()
	{
		$modelLinks = $this->model('LinksModel');
		$sitelinks = $modelLinks->getSiteLinks();

		$headerdata = array(
			"pagename" => "Online Schedule",
			"sitenav" => $sitelinks
		);

		$this->view('schedule/index', array(
			"headerdata" => $headerdata
		));
	}

}
