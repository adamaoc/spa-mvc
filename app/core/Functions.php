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