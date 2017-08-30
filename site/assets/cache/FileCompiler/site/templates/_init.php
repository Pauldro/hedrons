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
 require_once(\ProcessWire\wire('files')->compile($config->paths->vendor.'hedrons/vendor/autoload.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));

 include_once(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/_func.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include our shared functions

	if ($input->get->modal) {
		$config->modal = true;
	}



	$config->styles->append($config->urls->templates.'styles/bootstrap.min.css');
	$config->styles->append("https://fonts.googleapis.com/icon?family=Material+Icons");
	$config->styles->append($config->urls->templates.'styles/libs/datatables.css');
	$config->styles->append($config->urls->templates.'styles/libs.css');
	$config->styles->append($config->urls->templates.'styles/styles.css');

	$config->scripts->append("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js");
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
