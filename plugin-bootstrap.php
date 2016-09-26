<?php
/**
 * Custom Post Type Starter Plugin
 *
 * @package     PurpleProdigy\CustomPostTypeStarter
 * @author      Purple Prodigy
 * @license     GPL-2.0+
 *
 * @wordpress-plugin
 * Plugin Name: Custom Post Type Starter Plugin
 * Plugin URI:  http://www.purpleprodigy.com
 * Description: Functionality and custom post type for a Custom Post Type Starter Plugin
 * Version:     1.0.0
 * Author:      Purple Prodigy
 * Author URI:  http://www.purpleprodigy.com
 * Text Domain: pp-cpt-starter
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace PurpleProdigy\CustomPostTypeStarter;

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Cheatin&#8217; uh?' );
}

/**
 * Setup the plugin's constants.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_constants() {
	$plugin_url = plugin_dir_url( __FILE__ );
	if ( is_ssl() ) {
		$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
	}

	define( 'CustomPostTypeStarter_URL', $plugin_url );
	define( 'CustomPostTypeStarter_DIR', plugin_dir_path( __DIR__ ) );
}

/**
 * Initialize the plugin hooks
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_hooks() {
	register_activation_hook( __FILE__, __NAMESPACE__ . '\flush_rewrites' );
	register_deactivation_hook( __FILE__, 'flush_rewrite_rules' );
}

/**
 * Flush the rewrites.
 *
 * @since 1.0.0
 *
 * @return void
 */
function flush_rewrites() {
	init_autoloader();

	Custom\register_custom_post_type();

	flush_rewrite_rules();
}

/**
 * Kick off the plugin by initializing the plugin files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function init_autoloader() {
	require_once( 'src/support/autoloader.php' );

	Support\autoload_files( __DIR__ . '/src/' );
}

/**
 * Launch the plugin
 *
 * @since 1.0.0
 *
 * @return void
 */
function launch() {
	init_autoloader();
}

init_constants();
init_hooks();
launch();