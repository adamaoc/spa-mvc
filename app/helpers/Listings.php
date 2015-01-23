<?php

class Listings
{

	public function listCount($list = array())
	{
		$count = count($list['posts']);

		return $count;
	}


	public function pagination($page,$productsPerPage, $totalPages) 
	{
		if(empty($page)) {
			$currentPage = 1;
		}else{
			$currentPage = $page;
		}

		$currentPage = intval($currentPage);

		// if current page is greater than total pages
		if($currentPage > $totalPages) {
			header("Location: ./?pg=".$totalPages);
		}
		if($currentPage < 1) {
			header("Location: ./");
		}

		// start and end numbers
		$startNum = (($currentPage - 1) * $productsPerPage) + 1;
		$endNum = $currentPage * $productsPerPage;

		$data = array($startNum, $endNum);
		// echo "<pre>";
		// echo "Current Page: ".$currentPage;
		// echo "\nProducts Per Page: ".$productsPerPage;
		// echo "\nTotal Pages: ".$totalPages;
		// echo "\nStart Number: ".$startNum;
		// echo "\nEnd Number: ".$endNum;

		// echo "</pre>";
		return $data;
	}

}