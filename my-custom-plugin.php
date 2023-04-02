<?php 
/*
 * Plugin Name:       Custom Plugin
 * Plugin URI:        https://github.com/Rajan1308/my-custom-plugin
 * Description:       Handle the basics with this plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Rajan Gupta
 * Author URI:        https://wpcustom.in/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */



 /**
 * Bootstrap the plugin.
 */
require_once 'vendor/autoload.php';
require_once untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/inc/custom-functions.php';


use MyCustomPlugin\Plugin;

if ( class_exists( 'MyCustomPlugin\Plugin' ) ) {
	$the_plugin = new Plugin();
}

register_activation_hook( __FILE__, [ $the_plugin, 'activate' ] );

register_deactivation_hook( __FILE__, [ $the_plugin, 'deactivate' ] );