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
			'name'               => _x( 'Team Bios', 'post type general name', 'pp-cpt-starter' ),
			'singular_name'      => _x( 'Team Bio', 'post type singular name', 'pp-cpt-starter' ),
			'menu_name'          => _x( 'Team Bios', 'admin menu', 'pp-cpt-starter' ),
			'name_admin_bar'     => _x( 'Team Bio', 'add new on admin bar', 'pp-cpt-starter' ),
			'add_new'            => _x( 'Add New', 'team-bios', 'pp-cpt-starter' ),
			'add_new_item'       => __( 'Add New Team Bio', 'pp-cpt-starter' ),
			'new_item'           => __( 'New Team Bio', 'pp-cpt-starter' ),
			'edit_item'          => __( 'Edit Team Bio', 'pp-cpt-starter' ),
			'view_item'          => __( 'View Team Bio', 'pp-cpt-starter' ),
			'all_items'          => __( 'All Team Bios', 'pp-cpt-starter' ),
			'search_items'       => __( 'Search Team Bios', 'pp-cpt-starter' ),
			'parent_item_colon'  => __( 'Parent Team Bios:', 'pp-cpt-starter' ),
			'not_found'          => __( 'No team bios found.', 'pp-cpt-starter' ),
			'not_found_in_trash' => __( 'No team bios found in Trash.', 'pp-cpt-starter' ),

			'featured_image' => __( 'Profile Image.', 'pp-cpt-starter' ),
			'set_featured_image' => __( 'Set Profile Image.', 'pp-cpt-starter' ),
			'remove_featured_image' => __( 'Remove Profile Image.', 'pp-cpt-starter' ),
			'use_featured_image' => __( 'Use Profile Image.', 'pp-cpt-starter' )
		);

	$args = array(
		'label'  => __( 'Team Bios', 'CustomPostTypeStarter' ),
		'labels' => $labels,
		'public' => true,
		'supports' => array(
			'title', 'editor', 'thumbnail', 'custom-fields'
		)
	);

	register_post_type( 'team-bios', $args );
}

