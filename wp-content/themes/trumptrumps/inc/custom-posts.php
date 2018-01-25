<?php
/**
 * Register custom post types
 */

function trumps_register_post_types()
{
	$trump_card_args = array(
		'labels' 				=> array(
			'name' 				=> 'Trump Trumps Cards',
			'singular_name' 	=> 'Trump Trumps Card',
		),
		'description' 			=> 'Each Trump Trumps card is a collection of the stats pertaining to one card.',
		'public'				=> true,
		'show_ui' 				=> true,
		'has_archive' 			=> true,
		'show_in_menu' 			=> true,
		'menu_position' 		=> '1',
		'exclude_from_search' 	=> false,
		'capability_type' 		=> 'post',
		'map_meta_cap' 			=> true,
		'hierarchical'	 		=> false,
		'rewrite' 				=> true,
		'query_var' 			=> true,
		'menu_icon' 			=> 'dashicons-admin-page'
	);
	register_post_type( 'trump_card', $trump_card_args );
}
add_action('init', 'trumps_register_post_types');
