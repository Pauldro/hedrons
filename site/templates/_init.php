<?php

/**
 * Initialization file for template files
 *
 * This file is automatically included as a result of $config->prependTemplateFile
 * option specified in your /site/config.php.
 *
 * You can initialize anything you want to here. In the case of this beginner profile,
 * we are using it just to include another file with shared functions.
 *
 */
  	require_once ($config->paths->vendor.'hedrons/vendor/autoload.php');

	include_once("./_func.php"); // include our shared functions

	if ($input->get->modal) {
		$config->modal = true;
	}



	$config->styles->append($config->urls->templates.'styles/bootstrap.min.css');
	$config->styles->append("https://fonts.googleapis.com/icon?family=Material+Icons");
	$config->styles->append($config->urls->templates.'styles/libs/datatables.css');
    $config->styles->append($config->urls->templates.'styles/cssanimation.css');
	//$config->styles->append($config->urls->templates.'styles/libs.css');
	$config->styles->append($config->urls->templates.'styles/styles.css');

	//$config->scripts->append($config->urls->templates.'scripts/js-config.js');
	$config->scripts->append($config->urls->templates.'scripts/bootstrap.min.js');
    $config->scripts->append($config->urls->templates.'scripts/libs/datatables.js');
	$config->scripts->append($config->urls->templates.'scripts/libs/jquery-actual.js');
    $config->scripts->append($config->urls->templates.'scripts/libs/uri.js');
	//$config->scripts->append($config->urls->templates.'scripts/libraries.js');
	$config->scripts->append($config->urls->templates.'scripts/classes.js');
	$config->scripts->append($config->urls->templates.'scripts/scripts.js');
	$config->scripts->append('https://use.fontawesome.com/ba5b2370e2.js');

	$setequalheights = array();
