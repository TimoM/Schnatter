<?php
class blog {

	public static function getArticle() {
		global $s_root;
		$dir    = $s_root.'/content';
		$files = scandir($dir, 1);
		$i = 0;
		foreach ($files as $file) {
			$path_info = pathinfo($file);
			$artikel = $path_info['filename'];
			$zahl = is_numeric($artikel[0]);
	    	$path = $path_info['extension'];
	    	if ($path == 'md' && $zahl == '1') {
	    		$articles[$i] = $file;
	    		++$i;
	    	}
	    }
	    return $articles;
	}

	public static function articles($n='') {
		global $s_root, $article;
		
		if ($article == false) {
			$article1 = $_GET["article"];
			$ausgabe = file_get_contents($s_root.'/content/'.$article1.'.md');
		} else {
			$ausgabe = file_get_contents($s_root.'/content/'.$article);
		}
		$ausgaben = explode('-----', $ausgabe,4); // Zahl = Anzahl an Feldern in Mardown-Files
		foreach ($ausgaben as $ausgab) {
				$ziel = (explode(': ', $ausgab,2));
				$ziel1 = preg_replace('/\r|\n/s', '', $ziel[0]);
				$text[$ziel1] = $ziel[1];
		}
		
		return $text[$n];
	}

	public static function date($p='Y-m-d') {
		$datum = self::articles('Date');

		$datum = preg_replace('/\r|\n/s', '', trim($datum, ' '));
		echo date($p, strtotime($datum));
	}

	public static function title() {
		$title = self::articles('Title');

		$title = preg_replace('/\r|\n/s', '', trim($title, ' '));
		echo $title;
	
	}

	public static function author() {
		$author = self::articles('Author');

		$author = preg_replace('/\r|\n/s', '', trim($author, ' '));
		echo $author;
	}

	public static function text() {
		$text = self::articles('Text');

		$text = Markdown($text);
		$text = html::image($text);
		echo $text;
	}

	public static function preview($n=350) {
		$text = self::articles('Text');
		$text = preg_replace('@^(.{'.$n.'}\S*).*$@s', '\\1...', $text);
		$text = Markdown($text);
		$text = html::image($text);
		//echo preg_replace('@^(.{'.$n.'}\S*).*$@s', '\\1...', strip_tags($text));
		echo $text;
	}

	public static function permalink() {
		global $s_domain, $article, $s_rewrite;
		$datei = explode('.',$article);
		if ($s_rewrite != 'true') {
			echo $s_domain.'index.php?article='.$datei[0];
		} else{
			echo $s_domain.'article/'.$datei[0];
		}
	}


}
?>