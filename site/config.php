<?php namespace ProcessWire;

/**
 * ProcessWire Configuration File
 *
 * Site-specific configuration for ProcessWire
 *
 * Please see the file /wire/config.php which contains all configuration options you may
 * specify here. Simply copy any of the configuration options from that file and paste
 * them into this file in order to modify them.
 *
 * SECURITY NOTICE
 * In non-dedicated environments, you should lock down the permissions of this file so
 * that it cannot be seen by other users on the system. For more information, please
 * see the config.php section at: https://processwire.com/docs/security/file-permissions/
 *
 * This file is licensed under the MIT license
 * https://processwire.com/about/license/mit/
 *
 * ProcessWire 3.x, Copyright 2016 by Ryan Cramer
 * https://processwire.com
 *
 */

if(!defined("PROCESSWIRE")) die();

/*** SITE CONFIG *************************************************************************/

/** @var Config $config */

/**
 * Enable debug mode?
 *
 * Debug mode causes additional info to appear for use during dev and debugging.
 * This is almost always recommended for sites in development. However, you should
 * always have this disabled for live/production sites.
 *
 * @var bool
 *
 */
$config->debug = true;

/**
 * Prepend template file
 *
 * PHP file in /site/templates/ that will be loaded before each page's template file.
 * Example: _init.php
 *
 * @var string
 *
 */
$config->prependTemplateFile = '_init.php';


/*** INSTALLER CONFIG ********************************************************************/

/**
 * Installer: Database Configuration
 *
 */
$config->dbHost = 'localhost';
$config->dbName = 'hedrons';
$config->dbUser = 'root';
$config->dbPass = '';
$config->dbPort = '3306';

/**
 * Installer: User Authentication Salt
 *
 * Must be retained if you migrate your site from one server to another
 *
 */
$config->userAuthSalt = '043f46de8c3334f96d68a0ec1d473ca6';

/**
 * Installer: File Permission Configuration
 *
 */
$config->chmodDir = '0755'; // permission for directories created by ProcessWire
$config->chmodFile = '0644'; // permission for files created by ProcessWire

/**
 * Installer: Time zone setting
 *
 */
$config->timezone = 'America/Chicago';

/**
 * Installer: Unix timestamp of date/time installed
 *
 * This is used to detect which when certain behaviors must be backwards compatible.
 * Please leave this value as-is.
 *
 */
$config->installed = 1503624754;


/**
 * Installer: HTTP Hosts Whitelist
 *
 */
$config->httpHosts = array('localhost');

$config->pages = new Paths($rootURL);
$config->pages->index = $config->urls->root;
$config->pages->account = $config->urls->root . 'user/account/';
$config->pages->login = $config->urls->root . 'user/account/login/';
$config->pages->podcast = $config->urls->root . 'podcasts/';
$config->pages->ajax = $config->urls->root . 'ajax/';
