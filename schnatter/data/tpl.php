<?php
class tpl {
	public static function pieces($n) {
		global $s_subfolder, $s_template;
		require_once $s_subfolder. $s_template . '/pieces/'.$n.'.php';
	}
	public static function css($n) {
		global $s_template, $s_domain;
		echo "<link href=\"". $s_domain . $s_template . $n ."\" type=\"text/css\" rel=\"stylesheet\" />\r\n";
	}
	public static function js($n) {
		global $s_template, $s_domain;
		echo "<script src=\"". $s_domain . $s_template . $n ."\" type=\"text/javascript\"></script>\r\n";
	}
}
?>