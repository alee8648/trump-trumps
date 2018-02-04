<?php
/**
 * Return reformatted JSON
 *
 * @param array $data Options for the function.
 * @return string|null Post title for the latest,  * or null if none.
 */
function get_trump_posts( $data ) {
	return "you did it";
  $posts = get_posts( array(

  ) );
 
  if ( empty( $posts ) ) {
    return null;
  }
 
  return $posts[0]->post_title;
}

function register_trumps_route() {
	register_rest_route( 'trump-api/v1', '/trump', array(
		'methods' => 'GET',
		'callback' => 'get_trump_posts',
	));
}

add_action('rest_api_init', register_trumps_route);