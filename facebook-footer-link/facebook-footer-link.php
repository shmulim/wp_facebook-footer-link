<?php
/**
 * Plugin Name: Facebook Footer Link
 * Description: Adds a facebook link at the footer of every post.
 * Version: 1.0.0
 * Author: Shmuli Markel
 * Author URI: http://shmulimarkel.com/
 * Tested up to: 4.4.0
 **/

// exit if plugin accessed directly
if( !defined( 'ABSPATH' ) ) exit;

$ffl_options = get_option('ffl_settings');

require_once( plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-content.php' );
require_once( plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-scripts.php' ); 
require_once( plugin_dir_path(__FILE__) . '/includes/facebook-footer-link-settings.php' );


