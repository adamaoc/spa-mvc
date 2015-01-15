<?php

function getComponent($file, $data = array()) {

	$docroot = $_SERVER['DOCUMENT_ROOT'];
	$dirpath = $docroot."/app/views/components/";

	$filepath = $dirpath.$file.".php";

	return require_once $filepath;

}

function getShared($file, $data = array()) {

	$docroot = $_SERVER['DOCUMENT_ROOT'];
	$dirpath = $docroot."/app/views/shared/";

	$filepath = $dirpath.$file.".php";

	return require_once $filepath;
}

function getHeader($data = array()) {

	return getShared("header", $data);
}

function getFooter($data = array()) { 

	return getShared("footer", $data);
}

function getData($api) {

	$curl = curl_init($api);

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	$results = curl_exec($curl);

	curl_close($curl);

	$results = json_decode($results, true);

	return $results;
}