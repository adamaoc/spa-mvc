<?php

class Controller
{
	public function model($model)
	{
		$path = $_SERVER['DOCUMENT_ROOT'].'/app/models/'.$model.'.php';
		require_once $path;
		return new $model();
	}

	public function view($view, $data = array())
	{
		$path = $_SERVER['DOCUMENT_ROOT'].'/app/views/'.$view.'.php';

		// get site header -
		// - must be in the views/shared folder named header.php
		getHeader($data['headerdata']);

		// get the current view specified in the controller
		require_once $path;

		// get site footer -
		// - must be in the views/shared folder named footer.php
		getFooter();
	}

	public function helper($helper)
	{
		$path = $_SERVER['DOCUMENT_ROOT'].'/app/helpers/'.$helper.'.php';
		require_once $path;
		return new $helper();
	}
}
