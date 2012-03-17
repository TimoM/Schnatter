<?php
require_once ('data/markdown.php');
require_once('data/tpl.php');
require_once('data/content.php');
require_once('data/page.php');
require_once('data/html.php');
require_once('data/media.php');

$articleUrl = $_GET["article"];
$pageUrl = $_GET["page"];

if ($articleUrl == '' && $pageUrl == '') {
require_once $s_subfolder. $s_template . '/theme/standard.php';
} else if ($articleUrl != '') {
require_once $s_subfolder. $s_template . '/theme/article.php';
} else {
require_once $s_subfolder. $s_template . '/theme/page.php';	
} 
?>