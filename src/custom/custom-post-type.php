<?php
/**
 * Custom Post Type functionality
 *
 * @package     PurpleProdigy\CustomPostTypeStarter\Custom
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @license     GNU General Public License 2.0+
 */
namespace PurpleProdigy\CustomPostTypeStarter\Custom;

add_action( 'init', __NAMESPACE__ . '\register_custom_post_type' );
/**
 * Register the custom post type.
 *
 * @since 1.0.0
 *
 * @return void
 */
function register_custom_post_type() {

		$labels = array(
			'name'               => _x( 'Books', 'post type general name', 'pp-cpt-starter' ),
			'singular_name'      => _x( 'Book', 'post type singular name', 'pp-cpt-starter' ),
			'menu_name'          => _x( 'Books', 'admin menu', 'pp-cpt-starter' ),
			'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'pp-cpt-starter' ),
			'add_new'            => _x( 'Add New', 'book', 'pp-cpt-starter' ),
			'add_new_item'       => __( 'Add New Book', 'pp-cpt-starter' ),
			'new_item'           => __( 'New Book', 'pp-cpt-starter' ),
			'edit_item'          => __( 'Edit Book', 'pp-cpt-starter' ),
			'view_item'          => __( 'View Book', 'pp-cpt-starter' ),
			'all_items'          => __( 'All Books', 'pp-cpt-starter' ),
			'search_items'       => __( 'Search Books', 'pp-cpt-starter' ),
			'parent_item_colon'  => __( 'Parent Books:', 'pp-cpt-starter' ),
			'not_found'          => __( 'No books found.', 'pp-cpt-starter' ),
			'not_found_in_trash' => __( 'No books found in Trash.', 'pp-cpt-starter' )
		);

	$args = array(
		'label'  => __( 'Team Bios', 'CustomPostTypeStarter' ),
		'labels' => $labels,
		'public' => true,
	);

	register_post_type( 'team-bios', $args );
}
