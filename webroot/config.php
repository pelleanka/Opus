<?php
/**
 * Config-file for Opus. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Opus paths.
 *
 */
define('OPUS_INSTALL_PATH', __DIR__ . '/..');
define('OPUS_THEME_PATH', OPUS_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(OPUS_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Opus variable.
 *
 */
$opus = array();
 
 
/**
 * Site wide settings.
 *
 */
$opus['lang']         = 'sv';
$opus['title_append'] = ' | Opus en webbtemplate';

/**
 * Theme related settings.
 *
 */
$opus['stylesheets'] =  array('css/style.css');
$opus['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$opus['modernizr'] = 'js/modernizr.js';

/**
 * Settings for JavaScript.
 *
 */
$opus['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$opus['jquery'] = null; // To disable jQuery

/**
 * Settings for JavaScript.
 *
 */
$opus['javascript_include'] = array();
//$opus['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$opus['google_analytics'] = null; //'UA-22093351-1'; // Set to null to disable google analytics