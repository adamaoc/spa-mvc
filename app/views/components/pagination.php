<?php
//
// mocking up pagination buttons //
//
$pages = $data[0]['totalPages'];
$page = $data[0]['currentPage'];
if($pages > 1) {
	echo '<ul class="pagination">';
	echo '<li class="arrow unavailable"><a href="./?pg=1">&laquo;</a></li>';
	for ($i=0; $i < $pages; $i++) { 
		$output = $i + 1;
		$class = "";
		if($output == $page) {
			$class = "current";
		}
		echo "<li class=".$class."><a href='./?pg=".$output."'>".$output."</a></li>";
	}
	echo '<li class="arrow"><a href="./?pg='.$pages.'">&raquo;</a></li>';
	echo '</ul>';
}

?>