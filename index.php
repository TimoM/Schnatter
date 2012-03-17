<?php
$s_domain = 'http://'.$_SERVER["SERVER_NAME"].'/';
$s_subfolder = '';
$s_domain = $s_domain . $s_subfolder;
$s_root = dirname(__FILE__);
$s_title = 'ScuRo';
$s_rewrite = 'true';
$s_schnatter = $s_root . '/schnatter';
$s_template = 'template';
if(!file_exists($s_schnatter . '/system.php')) {
  die('Schnatter system could not be loaded');  
} 
require_once($s_schnatter . '/system.php');
?>