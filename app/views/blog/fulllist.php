<?php
	foreach ($data['post'] as $post) {
		// print_r($post);
		echo $post['title'];
		echo " | ";
		echo $post['pubdate'];
		echo "<hr>";
	}
?>