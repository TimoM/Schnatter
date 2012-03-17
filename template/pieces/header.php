<!DOCTYPE html>
<html lang="en">
<head>
  
	<title><?php echo html::title() ?></title>
	<meta charset="utf-8" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width">
  	<?php tpl::css('/files/styles/styles.css') ?>
  	<?php tpl::css('/files/styles/ir_black.css') ?>
  	
  	<?php tpl::js('/files/js/jquery.js') ?>
  	<?php tpl::js('/files/js/highlight.js') ?>
  	<?php tpl::js('/files/js/scripts.js') ?>


	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<h1><a href="<?php echo html::home() ?>"><?php echo html::blogName() ?></a></h1>
	</header>