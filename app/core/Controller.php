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
		require_once $path;
	}

	public function helper($helper)
	{
		$path = $_SERVER['DOCUMENT_ROOT'].'/app/helpers/'.$helper.'.php';
		require_once $path;
		return new $helper();
	}
}
