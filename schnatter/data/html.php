<?php
class html {

	public static function title() {
		global $s_title;
		$articleUrl = $_GET['article'];
		$pageUrl = $_GET['page'];

		if ($articleUrl != '') {
			echo $s_title.' || ';
			echo  blog::title();
		}

		if ($pageUrl != '') {
			echo $s_title.' || ';
			echo  stat::title();
		}

		if ($articleUrl == '' && $pageUrl == '') {
			echo $s_title;
		}
	}

	public static function home() {
		global $s_domain;
		echo $s_domain;
	}
	
	public static function blogName() {
		global $s_title;
		echo $s_title;
	}

	public static function image($n) {
		global $s_root, $article;
		
		$slug = $_GET["article"];

		if ($slug == '') {
			$array = explode('.',$article);
			$slug = $array[0];
		}
		
		$image = str_replace('<img src="/', '<img src="'.$s_domain.'/media/'.$slug.'/' , $n);
		
		return $image;
	}

	
}
?>


