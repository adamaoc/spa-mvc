<?php

class WorksModel 
{
	public $pageTitle = "Works";
	public $pageSlogan = "DFW Web Development and Design";
	public $pageContent = "Here is some standard text for the portfolio page.";

	public $worksdir = "./data/works/posts/";

	public $workslistarr = array();

	public function getNumbPosts()
	{
		$directory = $this->worksdir;
		$filecount = 0;
		$files = glob($directory . "*.md");
		if ($files){
		 $filecount = count($files);
		}

		return $filecount;
	}

	public function getList($startnum, $endnum)
	{

		$list = $this->getAllPosts();

		array_multisort($list, SORT_DESC);

		for($i = $startnum; $i < $endnum; ++$i) {
			$buildarr[] = $list[$i];
		}

		$this->workslistarr = $buildarr;
		return $buildarr;
	}

	public function getAllPosts()
	{
		$buildarr = array();

		if($dh = opendir($this->worksdir)) 
		{
			while(false !== ($entry = readdir($dh))) 
			{
				if(substr(strrchr($entry,'.'),1)==ltrim('md', '.')) 
				{
					// Define the blog file.
                	$post = file($this->worksdir.$entry);
                	$buildarr[] = $this->buildPost($post);
				}
			}
		}

		$this->workslistarr = $buildarr;
		return $buildarr;
	}

	public function getPost($slug)
	{
	    $fname = $_SERVER['DOCUMENT_ROOT'].'/data/works/posts/'.$slug.'.md';
	    $post = file($fname);
	    $postarr = $this->buildPost($post);

		if(empty($postarr)) {
			// TODO
			// should redirect to a 404 page... 
			echo "404";
		}else{
			return $postarr;
		}

	}

	private function buildPost($post) 
	{

		require_once $_SERVER['DOCUMENT_ROOT']."/app/core/Parsedown.php";

		$buildarr = array();

    	$blog_title = str_replace(array("\n", '*'), '', $post[0]);
    	$blog_slug = str_replace(" ", "-", strtolower(trim($blog_title)));
    	$remove = array("'", '"', ",", "&", ".");
    	$blog_slug = str_replace($remove, '', $blog_slug);
    	$blog_subtitle = str_replace(array("\n", '* '), '', $post[1]);
    	$blog_pubdate = str_replace(array("\n", '* '), '', $post[2]);
    	$blog_cat = str_replace(array("\n", '* '), '', $post[3]);
    	
    	$blog_img = str_replace(array("\n", '* '), '', $post[4]);

    	if($blog_img == "default") {
    		$blog_imgthumb = "http://ampnetmedia.com/assets/img/default-pattern.jpg";
    	}else{
        	$blog_imgarr = explode('|', $blog_img);
        	$blog_imgthumb = trim($blog_imgarr[0]);
        	$blog_imgmd = trim($blog_imgarr[1]);
        	$blog_imglg = trim($blog_imgarr[2]);
    	}

    	// $post[5] - blog color
    	$blog_color = str_replace(array("\n", '*'), '', trim($post[5]));

    	// $post[6] - blog status
    	$blog_status = str_replace(array("\n", '*'), '', $post[6]);

    	// $post[7] - tag array
    	$blog_tags = str_replace(array("\n", '*'), '', $post[7]);
    	$tags_arr = explode(',', $blog_tags);

    	// $post[8] - blank space where blog starts

    	// Get the excerpt - intro paragraph
    	$excerpt = $post[9];
  		$max_words = 50;
    	$phrase_array = explode(' ',$excerpt);
   		if(count($phrase_array) > $max_words && $max_words > 0) {
      		$excerpt = implode(' ',array_slice($phrase_array, 0, $max_words)).'...';
   		}

    	$blog_intro = Parsedown::instance()->parse($excerpt);
    	$blog_intro = strip_tags($blog_intro);

    	// Get the whole post
    	$blog_content = Parsedown::instance()->parse(join('', array_slice($post, 9)));

    	$buildarr = array(
    		"pubdate" 	=> $blog_pubdate,
    		"title" 	=> $blog_title,
    		"subtitle" 	=> $blog_subtitle,
    		"slug" 		=> $blog_slug,
    		"category"	=> $blog_cat,
    		"imgthumb" 	=> $blog_imgthumb,
    		"imgmd" 	=> $blog_imgmd,
    		"imglg" 	=> $blog_imglg,
    		"color"		=> $blog_color,
    		"tagsarr"	=> $tags_arr,
    		"status"	=> $blog_status,
    		"excerpt" 	=> $blog_intro,
    		"content" 	=> $blog_content
    	);

    	return $buildarr;
	}
}
