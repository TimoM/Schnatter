<?php
class stat {

	public static function get() {
		global $s_root;
		$dir    = $s_root.'/content';
		$files = scandir($dir, 1);
		$i = 0;
		foreach ($files as $file) {
			$path_info = pathinfo($file);
			$artikel = $path_info['filename'];
			$zahl = is_numeric($artikel[0]);
	    	$path = $path_info['extension'];
	    	if ($path == 'md' && $zahl == '') {
	    		$pages[$i] = $file;
	    		++$i;
	    	}
	    }
	    return $pages;
	}

	public static function page($n='') {
		global $s_root;
		$page = $_GET["page"];
		$ausgabe = file_get_contents($s_root.'/content/'.$page.'.md');
		$ausgaben = explode('-----', $ausgabe,4);
		foreach ($ausgaben as $ausgab) {
				$ziel = (explode(': ', $ausgab, 2));
				$ziel1 = preg_replace('/\r|\n/s', '', $ziel[0]);
				$text[$ziel1] = $ziel[1];
		}
		
		return $text[$n];
		//print_r ($text);
	}

	public static function nav() {
		global $s_rewrite, $s_domain;
		$pages = self::get();
		foreach ($pages as $page) {
		if ( $page != '.' && $page != '..') {
			$page = substr($page, 0, -3); // .md entfernen
			if ($s_rewrite != 'true') {
				echo '<a href="'.$s_domain.'index.php?page='.$page.'">'.$page.'</a>';
			} else{
				echo '<a href="'.$s_domain.'page/'.$page.'">'.$page.'</a>';
			}
		}
		}
	}

	public static function navLink($n) {
		
	}

	public static function title() {
		$title = self::page('Title');
		$title = preg_replace('/\r|\n/s', '', trim($title, ' '));
		echo $title;
	
	}

	public static function text() {
		$text = self::page('Text');
		$text = Markdown($text);
		echo $text;
	}

	
}
?>