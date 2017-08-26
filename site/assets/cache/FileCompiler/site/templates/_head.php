<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title><?php echo strip_tags(html_entity_decode($page->get('title|pagetitle|headline|title'))); ?></title>
        <link rel="shortcut icon" href="<?php echo $config->urls->files."images/dplus.ico"; ?>">
        <!--
        <link rel="icon" href="<?php //echo $config->urls->files; ?>images/park-icon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" href="<?php //echo $config->urls->files; ?>images/park-icon.png">
		-->
		<meta name="description" content="<?php echo $page->summary; ?>" />
        <?php foreach($config->styles->unique() as $css) : ?>
        	<link rel="stylesheet" type="text/css" href="<?php echo $css; ?>" />
        <?php endforeach; ?>


	</head>
    <body>
		<?php include(\ProcessWire\wire('files')->compile($config->paths->content.'nav/navbar.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); ?>
        <div class=""><?php include(\ProcessWire\wire('files')->compile($config->paths->content.'nav/pop-nav.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?></div>
