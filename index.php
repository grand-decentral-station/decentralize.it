<?php 

/**
 * Kirby CMS index file
 * This file is located in the main directory of a Kirby site
 * and loads the roots.php if available as well as the kirby/system.php
 *
 * @package Kirby CMS
 */

// root file 
$rootfile = __DIR__ . DIRECTORY_SEPARATOR . 'roots.php';

// check for a custom roots file
if(file_exists($rootfile)) {
  // load the custom roots file
  include($rootfile);
} else {

  // system-independent shortcut for /
  define('DS', DIRECTORY_SEPARATOR);

  // location of the index.php / public document root
  define('KIRBY_INDEX_ROOT', __DIR__);

  // location of the kirby system
  define('KIRBY_CMS_ROOT', KIRBY_INDEX_ROOT . DS . 'kirby');

  // location of all site specific files / site folder
  define('KIRBY_SITE_ROOT', KIRBY_INDEX_ROOT . DS . 'site');

  // location of the content folder
  define('KIRBY_CONTENT_ROOT', KIRBY_INDEX_ROOT . DS . 'content');

}

// system starter file 
$system = KIRBY_CMS_ROOT . DS . 'system.php';

// check if the system file exists
if(!file_exists($system)) die('The Kirby system could not be loaded');  

// load the system
include($system);