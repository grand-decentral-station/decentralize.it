<?php 

/**
 * Custom roots for your Kirby installation
 * Modify those to relink essential parts of the system
 * to different locations
 */

// system independent shortcut for /
define('DS', DIRECTORY_SEPARATOR);

// location of the index.php / public document root
define('KIRBY_INDEX_ROOT', __DIR__);

// location of the kirby system
define('KIRBY_CMS_ROOT', KIRBY_INDEX_ROOT . DS . 'kirby');

// location of all site specific files / site folder
define('KIRBY_SITE_ROOT', KIRBY_INDEX_ROOT . DS . 'site');

// location of the content folder
define('KIRBY_CONTENT_ROOT', KIRBY_INDEX_ROOT . DS . 'content');